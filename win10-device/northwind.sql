use
northwind;
select ProductName 'Name', QuantityPerUnit 'quantity/unit'
from products;

select ProductID ID, ProductName Name
from products
where Discontinued = false;

select ProductID ID, ProductName Name
from products
where Discontinued = 1;

select ProductName, UnitPrice
from products
order by unitPrice DESC;

-- Write a query to get Product list (id, name, unit price) where current products cost less than $20.
SELECT ProductID, ProductName, UnitPrice
FROM products
where ((UnitPrice) < 20)
  and Discontinued = 0
order by UnitPrice DESC;

-- 6. Write a query to get Product list (id, name, unit price) where products cost between $15 and $25.

select ProductID, ProductName, UnitPrice
from products
where (UnitPrice between 15 and 25)
  and (Discontinued = false)
order by UnitPrice DESC;
-- 7. Write a query to get Product list (name, unit price) of above average price.

select ProductName, UnitPrice
FROM products
where UnitPrice > (select avg(UnitPrice) from products)
  and (Discontinued = false)
order by UnitPrice asc;
-- Write a query to get Product list (name, unit price) of ten most expensive products.

select ProductID, ProductName, UnitPrice
from products
order by UnitPrice DESC LIMIT 20;
-- Write a query to count current and discontinued products.
select count(Discontinued) as "Current Products"
from products
where (Discontinued = false)
UNION
select count(Discontinued) as "Discontinued Products"
from products
where (Discontinued = true);


-- Write a query to get Product list (name, units on order , units in stock) of stock is less than the quantity on order.
select ProductName, UnitsInStock, UnitsOnOrder
from products
where (UnitsInStock < UnitsOnOrder)
  and (Discontinued = false);
