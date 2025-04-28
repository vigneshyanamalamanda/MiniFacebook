  <h1>WAPH - Web Application Programming and Hacking</h1>
  <p><strong>Instructor:</strong> Dr. Phu Phung</p>

  <h2>Project Topic/Title</h2>
  <p>miniFacebook</p>

  <h2>Team Member</h2>
  <ul>
    <li><strong>Vignesh Yanamalamanda</strong> - yanamalamandav1@udayton.edu</li>
  </ul>

  <h2>Project Management Information</h2>
  <p><strong>Source code repository (GitHub):</strong> https://github.com/vigneshyanamalamanda/waph_vignesh</p>

  <h2>Revision History</h2>
  <table border="1">
    <tr><th>Date</th><th>Version</th><th>Description</th></tr>
    <tr><td>06/04/2025</td><td>0.1</td><td>Initial draft with updated project overview and system requirements.</td></tr>
  </table>

  <h2>Overview</h2>
  <p>This project simulates basic Facebook functionalities with strong emphasis on security and usability. It features user registration/login, profile editing, posting, commenting, and secure session management.</p>

  <h2>System Analysis</h2>
  <ul>
    <li>Secure user authentication and session management</li>
    <li>Database-backed post creation, editing, commenting, and display</li>
    <li>User profile management and password change functionality</li>
  </ul>

  <h2>System Design</h2>
  <ul>
    <li><strong>Backend:</strong> PHP (secure coding practices)</li>
    <li><strong>Frontend:</strong> HTML/CSS</li>
    <li><strong>Database:</strong> MySQL</li>
  </ul>

  <h2>Use-Case Realization</h2>
  <h3>Database</h3>
  <p>Designed normalized schema for users, posts, and comments with foreign key constraints.</p>

  <h3>User Interface</h3>
  <p>Simple, responsive forms and navigable interface using styled headers and action buttons.</p>

  <h2>Implementation</h2>
  <p>Implemented using a local LAMP stack with HTTPS. Git and GitHub were used for version control and collaboration.</p>

  <h2>Security Analysis</h2>
  <ul>
    <li>MD5 password hashing (as per assignment requirement)</li>
    <li>SQL injection prevention through prepared statements</li>
    <li>Session authentication and management</li>
    <li>XSS prevention with HTML escaping</li>
  </ul>


  <h2>Software Process Management</h2>
  <p>Agile development methodology was followed with sprint-based progress, daily standups, and retrospectives.</p>

  <h3>Sprint 0</h3>
  <p><strong>Duration:</strong> 04/06/2025 - 04/20/2025</p>
  <ul>
    <li>Project setup on GitHub</li>
    <li>Local development environment and SSL configuration</li>
  </ul>
  <p><strong>Contribution:</strong></p>
  <ul>
    <li><strong>Vignesh Yanamalamanda:</strong> 8 commits, 15 hours - Repository setup, backend development, session authentication setup.</li>
  </ul>

  <h3>Sprint 1</h3>
  <p><strong>Duration:</strong> 04/21/2025 - 05/04/2025</p>
  <ul>
    <li>Enhanced registration form with full name, email, and phone fields</li>
    <li>Developed secure login system with sessions and MD5 password hashing</li>
    <li>Built profile edit and password change functionalities</li>
    <li>Implemented post creation and viewing functionality</li>
    <li>Improved UI with CSS styling and button navigation</li>
  </ul>
  <p><strong>Contribution:</strong></p>
  <ul>
    <li><strong>Vignesh Yanamalamanda:</strong> 10 commits, 20 hours - Registration logic, addnewuser.php, login system, UI enhancement, database integration, README updates.</li>
  </ul>

  <h3>Sprint 2</h3>
  <p><strong>Duration:</strong> 05/05/2025 - 05/18/2025</p>
  <ul>
    <li>Implemented comments functionality under posts</li>
    <li>Allowed users to edit/delete only their own posts</li>
    <li>Created database tables for comments and superusers</li>
    <li>UI refinements: added delete/edit buttons, comment form enhancements</li>
    <li>Strengthened session security and cookie handling</li>
  </ul>
  <p><strong>Contribution:</strong></p>
  <ul>
    <li><strong>Vignesh Yanamalamanda:</strong> 16 commits, 24 hours - Post/comment management, superusers functionality, UI debugging, session hardening, README finalization.</li>
  </ul>

  <h3>Sprint Retrospection</h3>
  <table border="1">
    <tr><th>Good</th><th>Could have been better</th><th>How to improve?</th></tr>
    <tr>
      <td>Strong individual ownership and steady sprint progress</td>
      <td>Minor initial design rework for comment system</td>
      <td>Design database relationships early before sprint coding</td>
    </tr>
  </table>

