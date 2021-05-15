-- 8. Write a query to display the department ID and name and first name of manager.
SELECT e.DEPARTMENT_ID, d.DEPARTMENT_NAME, e.FIRST_NAME, d.MANAGER_ID
FROM employees as e
INNER JOIN departments as d
ON e.DEPARTMENT_ID = d.DEPARTMENT_ID
GROUP BY d.DEPARTMENT_ID
ORDER BY d.DEPARTMENT_ID;
-- 9. Write a query to display the department name, manager name, and city
SELECT d.DEPARTMENT_NAME, d.MANAGER_ID, l.CITY
FROM departments as d
JOIN locations as l
ON d.location_id = l.location_id;