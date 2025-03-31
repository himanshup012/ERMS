# ERMS
# Employee Resource Management System (ERMS)

## Project Overview
The **Employee Resource Management System (ERMS)** is a web-based platform designed to efficiently manage employee information, track experiences, and facilitate smooth administration. It provides a structured approach to managing employee records and authentication.

## Technologies Used
- **Backend:** PHP
- **Frontend:** HTML, CSS, JavaScript
- **Database:** MySQL

## Project Structure
```
- admin/                # Admin-related functionalities
- css/                  # Stylesheets
- front/                # Frontend files
- img/                  # Image assets
- includes/             # Core PHP includes
- js/                   # JavaScript files
- scss/                 # SCSS files
- vendor/               # Third-party dependencies
- changePassword.php    # Password change functionality
- editMyEducation.php   # Edit education details
- editMyExp.php         # Edit experience details
- ermsdb.sql            # Database schema
- forgetPassword.php    # Password recovery
- index.php             # Homepage
- loginErms.php         # Login page
- logout.php            # Logout functionality
- myEducation.php       # User education management
- myExp.php             # User experience management
- myProfile.php         # User profile page
- registerErms.php      # User registration
- resetPassword.php     # Password reset
```

##  Modules
### Admin Module
- Manage employee records.
- View and edit employee details.
- Reset user credentials.

### Sign-In Module
- Secure user authentication.
- Session-based login system.
- Password reset and recovery options.

### Sign-Up Module
- New users can register.
- Email and password validation.
- Secure data storage.

## Installation Guide
1. Clone the repository:
   ```sh
   git clone https://github.com/your-username/erms.git
   ```
2. Move to the project directory:
   ```sh
   cd erms
   ```
3. Configure the database:
   - Import `ermsdb.sql` into MySQL.
   - Update database credentials in `includes/config.php`.

## Future Enhancements
- Role-based access control.
- Improved UI design.
- Integration with third-party APIs.

## Contributing
Contributions are welcome! Feel free to fork this repository and submit pull requests.

## License
This project is licensed under the MIT License.


