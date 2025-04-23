<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>miniFacebook - Project README</title>
</head>
<body>
    <h1>WAPH - Web Application Programming and Hacking</h1>
    <p><strong>Instructor:</strong> Dr. Phu Phung</p>

    <h2>Project Title</h2>
    <p><strong>miniFacebook</strong></p>

    <h2>Team Members</h2>
    <ul>
        <li>Naga Satya Phanindra Vallabhaneni - vallabhanenin2@udayton.edu</li>
        <li>Upendra Dommaraju - dommarajuu1@udayton.edu</li>
        <li>Vignesh Yanamalamanda - yanamalamandav1@udayton.edu</li>
    </ul>

    <h2>Project Management Information</h2>
    <p><strong>Source code repository (private):</strong> 
        <a href="https://bitbucket.org/waph-s25-team1/waph-teamproject">Bitbucket Repository</a>
    </p>
    <p><strong>Project homepage (public):</strong> 
        <a href="https://waph-s25-team1.bitbucket.io">Project Homepage</a>
    </p>

    <h2>Revision History</h2>
    <table border="1" cellpadding="6" cellspacing="0">
        <tr>
            <th>Date</th>
            <th>Version</th>
            <th>Description</th>
        </tr>
        <tr>
            <td>06/04/2025</td>
            <td>0.1</td>
            <td>Initial draft with updated project overview and system requirements.</td>
        </tr>
    </table>

    <h2>Overview</h2>
    <p>This project simulates basic Facebook functionalities with an emphasis on security and usability. It features user login/registration, profile editing, posting, and viewing posts securely.</p>

    <h2>System Analysis</h2>
    <ul>
        <li>Secure user authentication and session management</li>
        <li>Database-backed post creation and display</li>
        <li>User account editing and password update</li>
    </ul>

    <h2>System Design</h2>
    <ul>
        <li>Backend: PHP (secure coding practices)</li>
        <li>Frontend: HTML/CSS</li>
        <li>Database: MySQL</li>
    </ul>

    <h2>Use-Case Realization</h2>
    <h3>Database</h3>
    <p>Normalized schema for <code>users</code> and <code>posts</code> with proper relationships and constraints.</p>

    <h3>User Interface</h3>
    <p>Simplified forms and navigable design using CSS styling with button-based headers.</p>

    <h2>Implementation</h2>
    <p>Local LAMP stack with HTTPS. Functionalities implemented through individual PHP scripts. Git and Bitbucket used for version control.</p>

    <h2>Security Analysis</h2>
    <ul>
        <li>MD5 password hashing (per assignment requirement)</li>
        <li>SQL injection prevention using prepared statements</li>
        <li>Session authentication across pages</li>
        <li>XSS protection using HTML escaping and proper output handling</li>
    </ul>

    <h2>Demo</h2>
    <img src="https://drive.google.com/uc?export=view&id=1HRDGYTv8llbB46eDDsuDCPX9CohnzLzZ" width="600" alt="Demo Screenshot" />
    <p>
        <a href="https://drive.google.com/file/d/1HRDGYTv8llbB46eDDsuDCPX9CohnzLzZ/view?usp=drive_link">View full-size screenshot</a>
    </p>

    <h2>Software Process Management</h2>
    <p>Agile development with 2-week sprints, daily standups, and task division using Scrum methodology.</p>

    <h3>Sprint 0</h3>
    <p><strong>Duration:</strong> 04/06/2025 - 04/20/2025</p>
    <ul>
        <li>Bitbucket project setup</li>
        <li>Local development environment and SSL certificate configuration</li>
    </ul>

    <p><strong>Contributions:</strong></p>
    <ul>
        <li>Naga Satya: 10 commits, 15 hours – Backend setup and basic authentication</li>
        <li>Upendra: 8 commits, 12 hours – Frontend CSS structure and initial login UI</li>
        <li>Vignesh: 9 commits, 14 hours – Database schema and session design</li>
    </ul>

    <h3>Sprint 1</h3>
    <p><strong>Duration:</strong> 04/21/2025 - 05/04/2025</p>
    <ul>
        <li>Added fields to registration: full name, email, phone, username</li>
        <li>Completed addnewuser.php backend logic with MD5 hash</li>
        <li>Built secure login system with session-based access</li>
        <li>Implemented user profile editing and password change</li>
        <li>Created post form and display logic in view_posts.php</li>
        <li>Refined UI with stylized header, buttons, and navigation</li>
    </ul>

    <p><strong>Contributions:</strong></p>
    <table border="1" cellpadding="6" cellspacing="0">
        <tr>
            <th>Name</th>
            <th>Commits</th>
            <th>Hours</th>
            <th>Work Done</th>
        </tr>
        <tr>
            <td>Naga Satya</td>
            <td>10</td>
            <td>15</td>
            <td>Posts table, view_posts page, logout</td>
        </tr>
        <tr>
            <td>Upendra</td>
            <td>8</td>
            <td>12</td>
            <td>UI buttons, CSS design enhancements, cookie security</td>
        </tr>
        <tr>
            <td>Vignesh</td>
            <td>15</td>
            <td>20</td>
            <td>Registration, session_auth, DB integration, post logic, debugging</td>
        </tr>
    </table>
</body>
</html>
