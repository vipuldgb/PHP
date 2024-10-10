# User Details Management with PHP

## Overview
  - This project demonstrates how to collect user details using PHP superglobals: `$_GET`, `$_POST`, `$_COOKIE`, and `$_SESSION`. The application allows users to input their information on one page, and then it displays the details on another page. This is a simple demonstration of how to manage user input and store it temporarily using PHP.

## Features
- Collects user details (first name, last name, email) through a form.
- Stores user data in:
  - **$_GET**: For passing data through URL parameters.
  - **$_POST**: For submitting data via a form.
  - **$_COOKIE**: For storing user data that persists across sessions.
  - **$_SESSION**: For storing user data during a session.
- Displays the collected user information on another page.
- Includes functionality to clear cookies and session data.