<?php

require_once("base.php"); 


///// ======================== IDOL MODEL ======================== /////
function getAllDataIdols() 
{
    return $GLOBALS["db"]->query("SELECT * FROM idols")->fetchAll(\PDO::FETCH_ASSOC);
}
function getAllDataHighlightIdolsWithGroupSlug() 
{
    return $GLOBALS["db"]->query("SELECT id_idol,idol_name, photo,slug
    FROM idols 
    INNER JOIN groups 
    ON idols.id_group = groups.id_group  ")->fetchAll(\PDO::FETCH_ASSOC);
}
function getAllDataHighlightIdolsWithGroupSlugByCountry($country) 
{
    return $GLOBALS["db"]->query("SELECT id_idol,idol_name, photo,slug
    FROM idols 
    INNER JOIN groups 
    ON idols.id_group = groups.id_group 
    WHERE idols.slug_country='$country' ")->fetchAll(\PDO::FETCH_ASSOC);
}
function getDataIdolsByGender($kodeKategori) 
{
    return $GLOBALS["db"]->query("SELECT * FROM idols WHERE gender = 0")->fetchAll(\PDO::FETCH_ASSOC);
}
function getDataIdolsByGroup($groupId) 
{
    return $GLOBALS["db"]->query("SELECT * FROM idols WHERE id_group = '$groupId' ")->fetchAll(\PDO::FETCH_ASSOC);
}
function getDataIdolsById($idolId) 
{
    return $GLOBALS["db"]->query("SELECT * FROM idols WHERE id_idol = '$idolId' ")->fetch();
}
function getDataHighlightIdolsByGroupAndNotSelf($idolId, $groupId) 
{
    return $GLOBALS["db"]->query("SELECT id_idol,idol_name, photo 
    FROM idols 
    WHERE id_group = '$groupId' AND id_idol != '$idolId'  ")->fetchAll(\PDO::FETCH_ASSOC);
}




///// ======================== GROUP MODEL ======================== /////
function getAllDataGroups() 
{
    return $GLOBALS["db"]->query("SELECT * FROM groups")->fetchAll(\PDO::FETCH_ASSOC);
}
function getAllDataGroupsHighlight() 
{
    return $GLOBALS["db"]->query("SELECT id_group, slug, group_name, group_cover FROM groups")->fetchAll(\PDO::FETCH_ASSOC);
}
function getAllDataGroupsHighlightByGender($gender) 
{
    return $GLOBALS["db"]->query("SELECT id_group, slug, group_name, group_cover 
    FROM groups
    WHERE group_gender=$gender")->fetchAll(\PDO::FETCH_ASSOC);
}
function getAllDataGroupsHighlightByLimit($limit) 
{
    return $GLOBALS["db"]->query("SELECT id_group, slug, group_name, group_cover FROM groups LIMIT $limit")->fetchAll(\PDO::FETCH_ASSOC);
}
function getDataGroupsHighlightByLimit($limit) 
{
    return $GLOBALS["db"]->query("SELECT id_group, slug, group_name, group_cover FROM groups LIMIT $limit")->fetchAll(\PDO::FETCH_ASSOC);
}
function getAllDataGroupsHighlightByLimitAndNotSelf($limit, $groupId) 
{
    return $GLOBALS["db"]->query("SELECT id_group, slug, group_name, group_cover 
    FROM groups 
    WHERE id_group != '$groupId' LIMIT $limit ")->fetchAll(\PDO::FETCH_ASSOC);
}


function getGroupDetailBySlug($slug) 
{
    return $GLOBALS["db"]->query("SELECT * FROM groups WHERE slug ='$slug'")->fetch();
}
function getGroupHighlightBySlug($slug) 
{
    return $GLOBALS["db"]->query("SELECT id_group, slug, group_name, group_cover FROM groups WHERE slug ='$slug'")->fetch();
}




///// ======================== ALBUM MODEL ======================== /////
function getAllAlbumsByGroup($groupId) 
{
    return $GLOBALS["db"]->query("SELECT * FROM albums WHERE id_group='$groupId' ")->fetchAll(\PDO::FETCH_ASSOC);
}
function getAlbumDetailById($albumId) 
{
    return $GLOBALS["db"]->query("SELECT al.album_name, gp.group_name, al.release_date, al.album_cover, al.id_album
    FROM albums as al 
    INNER JOIN groups as gp ON al.id_group = gp.id_group
    WHERE id_album='$albumId' ")->fetch();
}


///// ======================== SONG MODEL ======================== /////
function getAllSongsByAlbum($albumId) 
{
    return $GLOBALS["db"]->query("SELECT * FROM songs WHERE id_album='$albumId' ")->fetchAll(\PDO::FETCH_ASSOC);
}
function getSongDetailById($songId) 
{
    return $GLOBALS["db"]->query("SELECT sg.song_name, sg.id_song, sg.id_album, gp.group_name, al.album_name, gp.slug, sg.music_video
    FROM songs as sg
    INNER JOIN albums as al ON al.id_album = sg.id_album
    INNER JOIN groups as gp ON al.id_group = gp.id_group
    WHERE sg.id_song='$songId' ")->fetch();
}


///// ======================== FAVORITE MODEL ======================== /////
function InsertFavoriteIdolHByEmail($email)
{
    return $GLOBALS["db"]->query("INSERT INTO favorite_idols_h (email)
    VALUES ( '$email' )");
}
function InsertFavoriteGroupHByEmail($email)
{
    return $GLOBALS["db"]->query("INSERT INTO favorite_groups_h (email)
    VALUES ( '$email' )");
}
function getAllFavoriteIdolsByEmail($email)
{
    return $GLOBALS["db"]->query("SELECT idl.idol_name, idl.photo, idl.id_idol, grp.slug
    FROM favorite_idols_d  as fid
    INNER JOIN idols as idl ON fid.id_idol = idl.id_idol
    INNER JOIN groups as grp ON grp.id_group = idl.id_group
    WHERE id_favorite IN (SELECT id_favorite FROM favorite_idols_h WHERE email='$email') ")->fetchAll(\PDO::FETCH_ASSOC);
}
function getFavoriteIdolsByFavourite($email, $idIdol)
{
    return $GLOBALS["db"]->query("SELECT idl.id_idol
    FROM favorite_idols_d  as fid
    INNER JOIN idols as idl ON fid.id_idol = idl.id_idol
    INNER JOIN groups as grp ON grp.id_group = idl.id_group
    WHERE id_favorite IN (SELECT id_favorite FROM favorite_idols_h WHERE email='$email') AND fid.id_idol='$idIdol' ")->fetch();
}

function addFavouriteIdol($email, $idIdol)
{
    return $GLOBALS["db"]->query("INSERT INTO favorite_idols_d (id_favorite, id_idol)
    VALUES ( (SELECT id_favorite FROM favorite_idols_h WHERE email='$email') , '$idIdol' )");
}
function removeFavouriteIdol($email, $idIdol)
{
    return $GLOBALS["db"]->query("DELETE FROM favorite_idols_d 
    WHERE id_favorite = (SELECT id_favorite FROM favorite_idols_h WHERE email='$email') AND id_idol = '$idIdol' ");
}



function getAllFavoriteGroupsByEmail($email)
{
    return $GLOBALS["db"]->query("SELECT grp.group_name, grp.group_cover, grp.slug
    FROM favorite_groups_d  as fgd
    INNER JOIN groups as grp ON grp.id_group = fgd.id_group
    WHERE id_favorite IN (SELECT id_favorite FROM favorite_groups_h WHERE email='$email') ")->fetchAll(\PDO::FETCH_ASSOC);
}
function getFavoriteGroupsByFavourite($email, $idGroup)
{
    return $GLOBALS["db"]->query("SELECT grp.id_group
    FROM favorite_groups_d  as fgd
    INNER JOIN groups as grp ON grp.id_group = fgd.id_group
    WHERE id_favorite IN (SELECT id_favorite FROM favorite_groups_h WHERE email='$email') AND fgd.id_group='$idGroup' ")->fetch();
}

function addFavouriteGroup($email, $idGroup)
{
    return $GLOBALS["db"]->query("INSERT INTO favorite_groups_d (id_favorite, id_group)
    VALUES ( (SELECT id_favorite FROM favorite_groups_h WHERE email='$email') , '$idGroup' )");
}
function removeFavouriteGroup($email, $idGroup)
{
    return $GLOBALS["db"]->query("DELETE FROM favorite_groups_d 
    WHERE id_favorite = (SELECT id_favorite FROM favorite_groups_h WHERE email='$email') AND id_group = '$idGroup' ");
}

///// ======================== USER MODEL ======================== /////
function getUserData($email)
{
    return $GLOBALS["db"]->query("SELECT * 
    FROM users
    WHERE email='$email' ")->fetch();
}
function getUserDataHighlight($email)
{
    return $GLOBALS["db"]->query("SELECT email, username, photo
    FROM users
    WHERE email='$email' ")->fetch();
}

function InsertUser($data)
{
    var_dump($data['email']);
    $password = password_hash($data['password'], PASSWORD_BCRYPT);
    return $GLOBALS["db"]->query("INSERT INTO users (email, username, full_name, birthday, gender, password)
    VALUES ('".htmlspecialchars($data['email'])."',
    '".htmlspecialchars($data['username'])."', 
    '".htmlspecialchars($data['fullname'])."', 
    '".date("Y-m-d", strtotime($data['birthday']))."',
    ".intval(htmlspecialchars($data['gender'])).",
    '".$password."' )");
}

function editUserData($email, $data)
{
    return $GLOBALS["db"]->query("UPDATE users 
    SET username='".$data['username']."',
    full_name='".$data['full-name']."', 
    birthday='".$data['birthday']."'
    WHERE email='$email' ");
}
function editUserPhoto($email, $photoName)
{
    return $GLOBALS["db"]->query("UPDATE users 
    SET photo='".$photoName."'
    WHERE email='$email' ");
}



///// ======================== DATA MODEL ======================== /////
function getIdolsDataByGender($gender)
{
    return  intval($GLOBALS["db"]->query("SELECT count(gender) 
    FROM idols
    WHERE gender=$gender ")->fetch()[0]);
}
function getIdolsDataByCountries($slugCountry)
{
    return $GLOBALS["db"]->query("SELECT count(slug_country)
    FROM idols
    WHERE slug_country = '$slugCountry'
    GROUP BY slug_country
    ")->fetch()[0];
}
function getIdolsDataByOtherCountries()
{
    return $GLOBALS["db"]->query("SELECT count(slug_country) as sc
    FROM idols
    WHERE slug_country != 'kr' OR slug_country != 'jp' OR slug_country != 'cn' OR slug_country != 'au'
    GROUP BY slug_country
    
    ")->fetch()[0];
}

function getGroupsDataByGender($gender)
{
    return intval($GLOBALS["db"]->query("SELECT count(group_gender) 
    FROM groups
    WHERE group_gender=$gender ")->fetch()[0]);
}


?>