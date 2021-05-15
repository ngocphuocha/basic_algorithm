-- MySQL Restricting and Sorting data: [11 exercises with solution]
-- 1. Write a query to display the name (first_name, last_name) and salary for all employees whose salary is not in the range $10,000 through $15,000
select FIRST_NAME, LAST_NAME, SALARY
from employees
where SALARY not between 10000 and 15000;
-- 2. Write a query to display the name (first_name, last_name) and department ID of all employees in departments 30 or 100 in ascending order.
select FIRST_NAME, LAST_NAME, DEPARTMENT_ID
from employees
where DEPARTMENT_ID IN (30, 100)
ORDER BY  department_id  ASC;
-- 3. Write a query to display the name (first_name, last_name) and salary for all employees whose salary is not in the range $10,000 through $15,000 and are in department 30 or 100.
SELECT FIRST_NAME, LAST_NAME, SALARY, DEPARTMENT_ID
FROM employees
WHERE (SALARY NOT BETWEEN 10000 AND 15000) AND (DEPARTMENT_ID IN(30, 100))
ORDER BY DEPARTMENT_ID;

-- 4. Write a query to display the name (first_name, last_name) and hire date for all employees who were hired in 1987
SELECT FIRST_NAME, LAST_NAME, HIRE_DATE
FROM employees
WHERE HIRE_DATE LIKE '1987-__-__'; -- '1987%'

-- 5. Write a query to display the first_name of all employees who have both "b" and "c" in their first name.
SELECT FIRST_NAME
from employees
WHERE first_name LIKE '%b%'
AND first_name LIKE '%c%';
--  6. Write a query to display the last name, job, and salary for all employees whose job is that of a Programmer or a Shipping Clerk, and whose salary is not equal to $4,500, $10,000, or $15,000.
SELECT LAST_NAME, JOB_ID, SALARY
from employees
where (JOB_ID IN('IT_PROG', 'ST_CLERK')) and (SALARY NOT IN(4500, 10000, 15000));

-- 7. Write a query to display the last name of employees whose names have exactly 6 characters.
select LAST_NAME 'last name'
from employees
where CHAR_LENGTH(LAST_NAME) = 6;
-- 8. Write a query to display the last name of employees having 'e' as the third character
select LAST_NAME "Last Name" from employees where LAST_NAME LIKE '__e%';
-- 9. Write a query to display the jobs/designations available in the employees table
select DISTINCT JOB_ID as 'Job'
from employees;
-- 10. Write a query to display the name (first_name, last_name), salary and PF (15% of salary) of all employees.
select FIRST_NAME, LAST_NAME, SALARY, (SALARY*15/100) as 'PF'
from employees;
-- 11. Write a query to select all record from employees where last name in 'BLAKE', 'SCOTT', 'KING' and 'FORD'
select * from employees
where LAST_NAME in ('BLAKE', 'SCOTT', 'KING', 'FORD');