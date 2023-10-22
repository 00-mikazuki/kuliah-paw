SELECT firstname, address
FROM customer
WHERE balance > 0;

UPDATE customer
SET balance = 4500000, firstname = 'Almira'
WHERE customerID = 1;

DELETE
FROM customer
WHERE balance < 0;

INSERT INTO customer (firstname, address, balance)
VALUES ('Baharudin', 'Jl. Mengkudu No. 456, Surabaya', 1200000);

-- challenge 1
SELECT firstname, balance
FROM customer
WHERE balance >= 1000000
ORDER BY balance DESC;

-- challenge 2
SELECT firstname, balance
FROM customer
-- WHERE balance > 1000000 AND balance < 2000000
WHERE balance BETWEEN 1000000 AND 2000000
ORDER BY firstname DESC;

-- challenge 3
SELECT firstname, balance
FROM customer
WHERE address LIKE '%Surabaya'
ORDER BY firstname DESC;

-- challenge 4
INSERT INTO series (seriesDescription)
VALUES ('Harry Potter'), ('The Lord of the Rings'), ('The Chronicles of Narnia');

INSERT INTO books (bookTitle, seriesID, yearPublished)
VALUES
('The Fellowship of the Rings', '2', '1954'),
('The Two Towers', '2', '1954'),
('The Return of the King', '2', '1955'),
('The Lion, the Witch and the Wardrobe', '3', '1950'),
("The Philosopher's Stone", '1', '1997'),
('The Chambers of Secrets', '1', '1998'),
('The Prisones of Azkaban', '1', '1999'),
('The Goblet of Fire', '1', '2000');

-- challenge 5
SELECT bookTitle
FROM books
WHERE seriesID = '1';

SELECT books.bookTitle, series.seriesDescription, books.yearPublished
FROM books
INNER JOIN series 
ON books.seriesID = series.seriesID;