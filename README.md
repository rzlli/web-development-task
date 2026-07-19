# Web Development Task

## Task Instructions & Implementation:

1. Design a webpage using necessary web languages:
   - Created f.php containing HTML, CSS, and JavaScript.
   - Created m.php and toggle.php using PHP for server-side processing.

2. Create a one-line form:
   - Designed a single-line HTML form in f.php that includes inputs for Name, Age, and a Submit button.

3. Store submitted data into a MySQL database table:
   - The form sends data to m.php via POST method, which connects to the MySQL database and inserts the records into the user table.

4. Display all records from the table below the form:
   - Added an HTML table in f.php directly below the form that fetches and displays all records from the database.

5. Add a toggle button for each record:
   - Inside the table, a "Toggle" button is generated next to each row to switch the status value between 0 and 1.

6. Reflect the updated status immediately on the webpage:
   - Used JavaScript (AJAX / XMLHttpRequest) to send the record ID to toggle.php in the background. It updates the value in the database and reflects the change immediately in the table without reloading the page.
