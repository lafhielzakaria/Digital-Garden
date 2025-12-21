Digital Garden: README
Project Overview

Digital Garden is a minimalistic and customizable web application developed by GreenTech Solutions. It allows users to create and manage their own digital garden, where they can organize their thoughts, projects, and personal information. Users can create themes, associate notes to those themes, and manage them in an intuitive, colorful, and simple interface.

The application has full CRUD (Create, Read, Update, Delete) functionality for both Themes and Notes, with options for adding tags to themes. It features user authentication, session management, and data validation both on the client and server sides.

Table of Contents

Technologies Used

Features

Setup and Installation

Database Structure

File Structure

Usage

Security

Performance

Contributions

License

Technologies Used

Frontend:

HTML5, CSS3

Bootstrap / Tailwind CSS (for responsive layout and components)

JavaScript (for client-side validation and user interactions)

Backend:

PHP 8 (Procedural PHP for handling business logic and server-side operations)

MySQL (for database management)

MySQLi (for database queries and security)

Other Tools:

Jira (for task management and issue tracking)

Features

User Authentication:

Secure login and registration system with password hashing.

Session management to ensure only authenticated users access their digital garden.

Themes Management:

Create, update, and delete themes.

Assign a unique color to each theme.

Optionally add tags to themes.

View the number of notes associated with each theme.

Notes Management:

Create, update, and delete notes.

Assign notes to themes.

Filter notes by theme, importance (1–5), and keyword search.

Responsive UI:

The UI is designed to be responsive, making it user-friendly across devices such as desktop, tablet, and mobile.

Validation:

Client-side validation using JavaScript.

Server-side validation with PHP to ensure data integrity and security.

Data Security:

Prevent SQL Injection using prepared statements.

Protection against XSS (Cross-Site Scripting) by sanitizing and encoding output.

Bonus Features (Optional):

Dark/Light mode toggle.

SweetAlert popups before deleting items.

Export themes to JSON.

Image upload for themes.

Pagination for note listing.

Sorting notes by custom parameters.
