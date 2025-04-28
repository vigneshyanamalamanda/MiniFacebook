<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>miniFacebook - Project README</title>
</head>

<body>
  <h1>WAPH - Web Application Programming and Hacking</h1>
  <p><strong>Instructor:</strong> Dr. Phu Phung</p>

  <h2>Project Topic/Title</h2>
  <p>miniFacebook</p>

  <h2>Team Members</h2>
  <ul>
    <li>Naga Satya Phanindra Vallabhaneni - vallabhanenin2@udayton.edu</li>
    <li>Upendra Dommaraju - dommarajuu1@udayton.edu</li>
    <li>Vignesh Yanamalamanda - yanamalamandav1@udayton.edu</li>
  </ul>

  <h2>Project Management Information</h2>
  <p><strong>Source code repository (private access):</strong> https://bitbucket.org/waph-s25-team1/waph-teamproject</p>
  <p><strong>Project homepage (public):</strong> https://waph-s25-team1.bitbucket.io</p>

  <h2>Revision History</h2>
  <table border="1">
    <tr><th>Date</th><th>Version</th><th>Description</th></tr>
    <tr><td>06/04/2025</td><td>0.1</td><td>Initial draft with updated project overview and system requirements.</td></tr>
  </table>

  <h2>Overview</h2>
  <p>This project simulates basic Facebook functionalities with an emphasis on security and usability. It features user login/registration, profile editing, posting, commenting, and managing posts securely.</p>

  <h2>System Analysis</h2>
  <ul>
    <li>Secure user authentication and session management</li>
    <li>Database-backed post creation, editing, commenting, and display</li>
    <li>User account editing and password update</li>
  </ul>

  <h2>System Design</h2>
  <p><strong>Backend:</strong> PHP (secure coding practices)</p>
  <p><strong>Frontend:</strong> HTML/CSS</p>
  <p><strong>Database:</strong> MySQL</p>

  <h2>Use-Case Realization</h2>
  <h3>Database</h3>
  <p>Normalized schema for users, posts, and comments with proper foreign key relationships and constraints.</p>

  <h3>User Interface</h3>
  <p>Simplified forms and navigable design using styled headers and action buttons.</p>

  <h2>Implementation</h2>
  <p>Local LAMP stack with HTTPS configuration. Git and Bitbucket were used for source control and collaboration.</p>

  <h2>Security Analysis</h2>
  <ul>
    <li>MD5 password hashing (as per assignment requirements)</li>
    <li>SQL injection prevention via prepared statements</li>
    <li>Session authentication across pages</li>
    <li>XSS prevention using HTML escaping</li>
  </ul>

  <h2>Demo</h2>
  <img src="https://drive.google.com/uc?export=view&id=1HRDGYTv8llbB46eDDsuDCPX9CohnzLzZ" width="600" alt="Demo Screenshot" />
  <p><a href="https://drive.google.com/file/d/1HRDGYTv8llbB46eDDsuDCPX9CohnzLzZ/view?usp=drive_link">View full-size screenshot</a></p>

  <h2>Software Process Management</h2>
  <p>We followed Agile Scrum methodology with two-week sprints, daily stand-ups, and sprint retrospectives.</p>

  <h3>Sprint 0</h3>
  <p><strong>Duration:</strong> 04/06/2025 - 04/20/2025</p>
  <ul>
    <li>Bitbucket project setup</li>
    <li>Local development environment and SSL configuration</li>
  </ul>
  <p><strong>Contributions:</strong></p>
  <ul>
    <li>Naga Satya: 8 commits, 15 hours - backend setup and basic authentication</li>
    <li>Upendra: 8 commits, 12 hours - frontend CSS structure and initial login UI</li>
    <li>Vignesh Yanamalamanda: 9 commits, 14 hours - database schema and session design</li>
  </ul>

  <h3>Sprint 1</h3>
  <p><strong>Duration:</strong> 04/21/2025 - 05/04/2025</p>
  <ul>
    <li>Added full name, email, phone, username fields to registration</li>
    <li>Completed backend logic with MD5 hashing</li>
    <li>Built secure login system with sessions</li>
    <li>Profile editing and password change functionality</li>
    <li>Post creation form and viewing posts implemented</li>
    <li>UI refined with CSS improvements and new button styles</li>
  </ul>
  <p><strong>Contributions:</strong></p>
  <table border="1">
    <tr><th>Name</th><th>Commits</th><th>Hours</th><th>Work Done</th></tr>
    <tr><td>Naga Satya</td><td>10</td><td>15</td><td>Posts table, view_posts page, logout</td></tr>
    <tr><td>Upendra</td><td>12</td><td>12</td><td>UI buttons, session_auth, cookie security, changepasswordform, changepassword</td></tr>
    <tr><td>Vignesh Yanamalamanda</td><td><b>16</b></td><td><b>20</b></td><td>Registration, addnewuser, README, database integration, debugging, header buttons, CSS styling</td></tr>
  </table>

  <h3>Sprint 2</h3>
  <p><strong>Duration:</strong> 05/05/2025 - 05/18/2025</p>
  <ul>
    <li>Implemented comment functionality on posts</li>
    <li>Users can edit and delete their own posts only</li>
    <li>Created "comments" and "superusers" tables in the database</li>
    <li>Enhanced post management UI for edit/delete actions</li>
    <li>Fixed session cookie security issues</li>
  </ul>
  <p><strong>Contributions:</strong></p>
  <table border="1">
    <tr><th>Name</th><th>Commits</th><th>Hours</th><th>Work Done</th></tr>
    <tr><td>Naga Satya</td><td>8</td><td>12</td><td>Post edit/delete logic, database foreign keys, session fixes</td></tr>
    <tr><td>Upendra</td><td>10</td><td>13</td><td>Comment form/button UI, delete comment flow, CSS improvements</td></tr>
    <tr><td>Vignesh Yanamalamanda</td><td><b>16</b></td><td><b>22</b></td><td>Comment table design, form handling for posts/comments, superusers table, debugging, documentation updates</td></tr>
  </table>

  <h3>Sprint Retrospection</h3>
  <table border="1">
    <tr><th>Good</th><th>Could have been better</th><th>How to improve?</th></tr>
    <tr>
      <td>Excellent collaboration and steady progress</td>
      <td>Minor confusion on comment/post linking initially</td>
      <td>Plan database structure carefully before implementation</td>
    </tr>
  </table>

</body>
</html>
