-- 1. Write a query to find the addresses (location_id, street_address, city, state_province, country_name) of all the departments.
select `DEPARTMENT_NAME`, locations.location_id, locations.street_address, locations.city, locations.state_province, countries.country_name
from departments
inner join locations on departments.location_id = locations.location_id
inner join countries
on locations.country_id = countries.country_id;
-- 2. Write a query to find the name (first_name, last name), department ID and name of all the employees.
select employees.first_name, employees.last_name, departments.department_id, departments.`DEPARTMENT_NAME`
from employees
inner join departments
on employees.`DEPARTMENT_ID` = departments.`DEPARTMENT_ID`;
-- OR
SELECT first_name, last_name, department_id, department_name
FROM employees
JOIN departments USING (department_id);

-- 3. Write a query to find the name (first_name, last_name), job, department ID and name of the employees who works in London.
select  first_name, last_name, JOB_ID, department_id, city
from employees
inner join departments USING (department_id)
inner join locations USING (location_id)
where city = 'London';
-- 4. Write a query to find the employee id, name (last_name) along with their manager_id and name (last_name).
select  first_name, last_name, JOB_ID, department_id, city
from employees
inner join departments USING (department_id)
inner join locations USING (location_id)
where city = 'London';
-- 5. Write a query to find the name (first_name, last_name) and hire date of the employees who was hired after 'Jones'.
select e.first_name, e.last_name, e.hire_date
from employees as e
where e.hire_date > (select hire_date from employees where last_name = 'Jones');
-- or using join
select e.first_name, e.last_name, e.hire_date
from employees as e
join employees as new_e
on (new_e.last_name = 'Jones')
where new_e.hire_date < e.hire_date;

-- 6. Write a query to get the department name and number of employees in the department
select count(*), department_id, DEPARTMENT_NAME
from employees
join departments USING (department_id)
group by department_id;
-- 7. Write a query to find the employee ID, job title, number of days between ending date and starting date for all jobs in department 90.
SELECT job_history.employee_id, jobs.job_title, (job_history.end_date - job_history.start_date) as 'Days'
from job_history
join jobs
on job_history.job_id = jobs.job_id
where job_history.department_id = 90;
