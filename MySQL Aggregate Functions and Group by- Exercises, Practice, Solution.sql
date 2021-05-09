-- 1. Write a query to list the number of jobs available in the employees table.
select DISTINCT JOB_ID from employees;

-- 2. Write a query to get the total salaries payable to employees
SELECT SUM(SALARY) AS 'TOTAL SALARY'
FROM employees;
-- 3. Write a query to get the minimum salary from employees table.
SELECT MIN(SALARY)
FROM employees;
-- 4. Write a query to get the maximum salary of an employee working as a Programmer.
SELECT MAX(SALARY) AS 'MAX SALARY OF PROGRAMER'
FROM employees
WHERE JOB_ID = 'IT_PROG';
-- 5. Write a query to get the average salary and number of employees working the department 90.
SELECT AVG(SALARY), COUNT(EMPLOYEE_ID) AS 'NUMBER OF EMPLOYESS'
FROM employees
WHERE DEPARTMENT_ID = 90;

-- 6. Write a query to get the highest, lowest, sum, and average salary of all employees.
SELECT COUNT(EMPLOYEE_ID) AS 'ALL EMPLOYEES', MAX(SALARY), MIN(SALARY), SUM(SALARY), AVG(SALARY)
FROM employees;

-- 7. Write a query to get the number of employees with the same job.
SELECT COUNT(EMPLOYEE_ID), JOB_ID
FROM employees
GROUP BY JOB_ID;

-- 8. Write a query to get the difference between the highest and lowest salaries.
SELECT (MAX(SALARY) - MIN(SALARY)) AS 'DIFFERENCE between the highest and lowest salaries'
FROM employees;

-- 9. Write a query to find the manager ID and the salary of the lowest-paid employee for that manager.
SELECT MANAGER_ID, SALARY AS 'LOWEST SALARY'
FROM employees
WHERE
-- 10. Write a query to get the department ID and the total salary payable in each department
select DEPARTMENT_ID, SUM(`SALARY`)
FROM `employees`
where DEPARTMENT_ID is not null
group BY DEPARTMENT_ID;
-- 11. Write a query to get the average salary for each job ID excluding programmer
select `JOB_ID`, AVG(`SALARY`)
from `employees`
where JOB_ID <> 'IT_PROG'
group by JOB_ID;
-- 12. Write a query to get the total salary, maximum, minimum, average salary of employees (job ID wise), for department ID 90 only.
select JOB_ID, sum(`SALARY`), MAX(SALARY), MIN(SALARY), AVG(SALARY)
FROM employees
where `DEPARTMENT_ID` = 90
group by JOB_ID;
-- 13. Write a query to get the job ID and maximum salary of the employees where maximum salary is greater than or equal to $4000.
SELECT JOB_ID, MAX(SALARY)
FROM `employees`
GROUP BY JOB_ID
HAVING MAX(SALARY) >= 4000;
-- 14. Write a query to get the average salary for all departments employing more than 10 employees
SELECT department_id, AVG(salary), COUNT(*)
FROM employees
GROUP BY department_id
HAVING COUNT(*) > 10;