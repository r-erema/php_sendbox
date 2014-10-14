CREATE TABLE  messages (
  id INTEGER PRIMARY KEY AUTOINCREMENT,
  title TEXT,
  category INTEGER,
  description TEXT,
  source TEXT,
  datetime, INTEGER
);

CREATE TABLE category(
  id INTEGER,
  name TEXT
);

INSERT INTO CATEGORIES(id, name) SELECT 1 as id, 'Политика' as name
UNION SELECT 2 as id, 'Культура' as name
UNION SELECT 3 as id, 'Спорт' as name