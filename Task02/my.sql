
-- create
CREATE TABLE classmates (
  id INTEGER PRIMARY KEY,
  name TEXT NOT NULL,
  age INTEGER NOT NULL,
  address TEXT NOT NULL
);

-- insert
INSERT INTO classmates VALUES (0001, 'Василий', '18', 'Москва');
INSERT INTO classmates VALUES (0002, 'Игнат', '34', 'Анапа');
INSERT INTO classmates VALUES (0003, 'Нина', '17', 'Краснодар');
INSERT INTO classmates VALUES (0004, 'Вика', '31', 'Москва');
INSERT INTO classmates VALUES (0005, 'Семён', '19', 'Москва');
INSERT INTO classmates VALUES (0006, 'Саша', '30', 'Москва');
INSERT INTO classmates VALUES (0007, 'Белла', '23', 'Одинцово');
INSERT INTO classmates VALUES (0008, 'Вова', '25', 'Москва');
INSERT INTO classmates VALUES (0009, 'Толик', '20', 'Подольск');
INSERT INTO classmates VALUES (0010, 'Елена', '37', 'Москва');

-- fetch 
SELECT name FROM classmates WHERE address = 'Москва' AND age >= 18 and age < 30;
