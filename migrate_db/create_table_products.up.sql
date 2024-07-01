CREATE TABLE products (
  id integer unique;
  name varchar(128);
  description varchar(1024);
  balance integer unique;
  discount integer unique;
  category integer unique
);
