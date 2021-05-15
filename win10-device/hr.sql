-- 1. Write a query to display the names (first_name, last_name) using alias name “First Name", "Last Name"
select FIRST_NAME 'First Name', LAST_NAME 'Last Name'
from employees;
-- 2. Write a query to get unique department ID from employee table
select DISTINCT DEPARTMENT_ID  from employees;
-- 3. Write a query to get all employee details from the employee table order by first name, descending.
select *
from employees
order by FIRST_NAME desc;
-- 4. Write a query to get the names (first_name, last_name), salary, PF of all the employees (PF is calculated as 15% of salary).
select FIRST_NAME, LAST_NAME, (SALARY*15/100) as 'PF'
from employees
order by PF desc;
-- 5. Write a query to get the employee ID, names (first_name, last_name), salary in ascending order of salary
  SELECT FIRST_NAME, LAST_NAME, SALARY
  from employees
  order by SALARY;
  --  6. Write a query to get the total salaries payable to employees
select sum(SALARY) as 'Total salries payable to all employees'
from employees;

-- 7. Write a query to get the maximum and minimum salary from employees table
select MIN(SALARY) AS 'MIN SALARY', MAX(SALARY) AS 'MAX SALARY'
FROM employees;

-- 8. Write a query to get the average salary and number of employees in the employees table.
select count(EMPLOYEE_ID) as 'Number of employees', AVG(SALARY) 'Average salary'
from employees;

-- 9. Write a query to get the number of employees working with the company.
select count(EMPLOYEE_ID) as 'Number of employees woring in company'
from employees;
-- 10. Write a query to get the number of jobs available in the employees table.
select count(DISTINCT JOB_ID) from employees;
-- 11. Write a query get all first name from employees table in upper case.
select UPPER(FIRST_NAME)
from employees;

-- 12. Write a query to get the first 3 characters of first name from employees table
select SUBSTRING(FIRST_NAME, 1, 3)
from employees;
--  13. Write a query to calculate 171*214+625.
select SUM(171*241+625) 'calulate';
-- 14. Write a query to get the names (for example Ellen Abel, Sundar Ande etc.) of all the employees from employees table.
select CONCAT(FIRST_NAME, ' ', LAST_NAME) as 'FULL NAME' from employees order by FIRST_NAME;
--  15. Write a query to get first name from employees table after removing white spaces from both side.
select TRIM(FIRST_NAME) from employees;

-- 16. Write a query to get the length of the employee names (first_name, last_name) from employees table.
select FIRST_NAME, LAST_NAME, CHARACTER_LENGTH(CONCAT(FIRST_NAME, LAST_NAME)) as "LENGTH OF FULL NAME" from
employees;
-- 18. Write a query to select first 10 records from a table.
select * from employees order by EMPLOYEE_ID limit 10;
-- 19. Write a query to get monthly salary (round 2 decimal places) of each and every employee
-- Note : Assume the salary field provides the 'annual salary' information.
select EMPLOYEE_ID, FIRST_NAME, round((SALARY/12) ,2 ) 'Salary/Month'
from employees;