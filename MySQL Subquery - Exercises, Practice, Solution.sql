-- 1. Write a query to find the name (first_name, last_name) and the salary of the employees who have a higher salary than the employee whose last_name='Bull'.
SELECT first_name, last_name, salary
from employees
where salary > (select salary from employees where last_name = 'Bull');
-- 2. Write a query to find the name (first_name, last_name) of all employees who works in the IT department.
select first_name, last_name
from employees
where department_id = (select department_id from departments where department_name = 'IT');

-- 3. Write a query to find the name (first_name, last_name) of the employees who have a manager and worked in a USA based department.
select first_name, last_name
from employees
where exists (select manager_id from departments where (employees.department_id = departments.department_id) and
exists (select location_id from locations where (departments.location_id = locations.location_id) and (country_id = 'US') ));
-- 4. Write a query to find the name (first_name, last_name) of the employees who are managers.
select first_name, last_name
from employees