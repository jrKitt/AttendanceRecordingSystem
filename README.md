# AttendanceRecordingSystem

**Attendance Recording System for IT NETWORK (Internship Company 2023)**

A comprehensive web-based attendance management system designed to track employee attendance, working hours, and generate detailed reports for organizational management. This project was developed as part of an internship program at IT NETWORK in 2023.

## Overview

The Attendance Recording System provides a digital solution for managing employee attendance records, replacing traditional manual tracking methods. The system offers real-time attendance monitoring, automated report generation, and comprehensive analytics for HR management.

## Features

### Core Features
- Employee attendance tracking (check-in/check-out)
- Real-time attendance monitoring
- Automated timesheet generation
- Leave management system
- Holiday and weekend configuration
- Multiple shift support
- Overtime calculation

### Administrative Features
- Employee management
- Department-wise attendance reports
- Monthly/weekly attendance summaries
- Export data to Excel/PDF formats
- User role management (Admin, HR, Employee)
- Attendance analytics and insights

### User Features
- Personal attendance dashboard
- Attendance history viewing
- Leave application submission
- Mobile-responsive interface
- Profile management

## Technology Stack

- **Frontend**: HTML5, CSS3, JavaScript, Bootstrap
- **Backend**: PHP/Node.js/Python (framework-dependent)
- **Database**: MySQL/PostgreSQL
- **Authentication**: Session-based/JWT
- **Charts**: Chart.js/D3.js for analytics
- **Export**: PhpSpreadsheet/ExcelJS for reports

## Prerequisites

Before installing the system, ensure you have the following:

### System Requirements
- **Web Server**: Apache/Nginx
- **PHP**: Version 7.4 or higher (if PHP-based)
- **Node.js**: Version 14.0+ (if Node.js-based)
- **Database**: MySQL 5.7+ or PostgreSQL 10+
- **Memory**: Minimum 2GB RAM
- **Storage**: Minimum 5GB available space

### Development Tools
- **Git**: For version control
- **Code Editor**: VS Code, PhpStorm, or similar
- **Browser**: Chrome, Firefox, or Safari (latest versions)

## Installation Guide

### Windows Installation

1. **Install Prerequisites**
   ```cmd
   # Download and install XAMPP for PHP/MySQL
   # Visit: https://www.apachefriends.org/download.html
   
   # Or install Node.js and MySQL separately
   # Node.js: https://nodejs.org/
   # MySQL: https://dev.mysql.com/downloads/installer/
   ```

2. **Clone Repository**
   ```cmd
   git clone https://github.com/jrKitt/AttendanceRecordingSystem.git
   cd AttendanceRecordingSystem
   ```

3. **Setup Database**
   ```cmd
   # Start XAMPP Control Panel
   # Start Apache and MySQL services
   
   # Create database
   mysql -u root -p
   CREATE DATABASE attendance_system;
   USE attendance_system;
   SOURCE database/attendance_system.sql;
   ```

4. **Configure Application**
   ```cmd
   # Copy configuration file
   copy config.example.php config.php
   
   # Edit config.php with your database credentials
   ```

### macOS Installation

1. **Install Prerequisites**
   ```bash
   # Install Homebrew
   /bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/HEAD/install.sh)"
   
   # Install required packages
   brew install php mysql apache2 git
   
   # Or install MAMP for easier setup
   # Visit: https://www.mamp.info/en/downloads/
   ```

2. **Clone and Setup**
   ```bash
   git clone https://github.com/jrKitt/AttendanceRecordingSystem.git
   cd AttendanceRecordingSystem
   
   # Start MySQL service
   brew services start mysql
   
   # Create database
   mysql -u root -p
   CREATE DATABASE attendance_system;
   USE attendance_system;
   source database/attendance_system.sql;
   ```

3. **Configure Web Server**
   ```bash
   # Configure Apache DocumentRoot to project directory
   sudo nano /usr/local/etc/httpd/httpd.conf
   
   # Or use MAMP and point to project directory
   ```

### Linux Installation

#### Ubuntu/Debian Setup

1. **Update System and Install LAMP Stack**
   ```bash
   sudo apt update && sudo apt upgrade -y
   
   # Install Apache, MySQL, PHP
   sudo apt install apache2 mysql-server php libapache2-mod-php php-mysql php-cli php-curl php-json php-mbstring -y
   
   # Install Git
   sudo apt install git -y
   ```

2. **Secure MySQL Installation**
   ```bash
   sudo mysql_secure_installation
   
   # Create database and user
   sudo mysql -u root -p
   CREATE DATABASE attendance_system;
   CREATE USER 'attendance_user'@'localhost' IDENTIFIED BY 'your_password';
   GRANT ALL PRIVILEGES ON attendance_system.* TO 'attendance_user'@'localhost';
   FLUSH PRIVILEGES;
   EXIT;
   ```

3. **Clone and Configure Project**
   ```bash
   cd /var/www/html
   sudo git clone https://github.com/jrKitt/AttendanceRecordingSystem.git
   sudo chown -R www-data:www-data AttendanceRecordingSystem/
   sudo chmod -R 755 AttendanceRecordingSystem/
   
   cd AttendanceRecordingSystem
   sudo cp config.example.php config.php
   sudo nano config.php  # Edit database credentials
   ```

#### CentOS/RHEL/Fedora Setup

1. **Install LAMP Stack**
   ```bash
   # For CentOS/RHEL
   sudo yum update -y
   sudo yum install httpd mysql-server php php-mysql git -y
   
   # For Fedora
   sudo dnf update -y
   sudo dnf install httpd mysql-server php php-mysql git -y
   ```

2. **Start Services**
   ```bash
   sudo systemctl start httpd mysql
   sudo systemctl enable httpd mysql
   ```

3. **Configure Project**
   ```bash
   cd /var/www/html
   sudo git clone https://github.com/jrKitt/AttendanceRecordingSystem.git
   sudo chown -R apache:apache AttendanceRecordingSystem/
   sudo setsebool -P httpd_can_network_connect 1  # SELinux permission
   ```

## Database Setup

### Database Schema

```sql
-- Create main tables
CREATE TABLE employees (
    id INT PRIMARY KEY AUTO_INCREMENT,
    employee_id VARCHAR(20) UNIQUE NOT NULL,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    department VARCHAR(50) NOT NULL,
    position VARCHAR(50) NOT NULL,
    hire_date DATE NOT NULL,
    status ENUM('active', 'inactive') DEFAULT 'active',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE attendance (
    id INT PRIMARY KEY AUTO_INCREMENT,
    employee_id VARCHAR(20) NOT NULL,
    date DATE NOT NULL,
    check_in_time TIME,
    check_out_time TIME,
    total_hours DECIMAL(4,2),
    status ENUM('present', 'absent', 'late', 'half_day') DEFAULT 'present',
    notes TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (employee_id) REFERENCES employees(employee_id)
);

CREATE TABLE leaves (
    id INT PRIMARY KEY AUTO_INCREMENT,
    employee_id VARCHAR(20) NOT NULL,
    leave_type ENUM('sick', 'vacation', 'personal', 'maternity') NOT NULL,
    start_date DATE NOT NULL,
    end_date DATE NOT NULL,
    days_requested INT NOT NULL,
    reason TEXT,
    status ENUM('pending', 'approved', 'rejected') DEFAULT 'pending',
    applied_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (employee_id) REFERENCES employees(employee_id)
);
```

### Initial Data Setup

```bash
# Import sample data (if available)
mysql -u attendance_user -p attendance_system < database/sample_data.sql

# Or create admin user manually
mysql -u attendance_user -p attendance_system
INSERT INTO employees (employee_id, first_name, last_name, email, department, position, hire_date) 
VALUES ('ADMIN001', 'System', 'Administrator', 'admin@company.com', 'IT', 'System Admin', CURDATE());
```

## Configuration

### Application Configuration

1. **Database Configuration**
   ```php
   // config.php
   <?php
   define('DB_HOST', 'localhost');
   define('DB_USERNAME', 'attendance_user');
   define('DB_PASSWORD', 'your_password');
   define('DB_NAME', 'attendance_system');
   define('DB_CHARSET', 'utf8');
   
   // Application Settings
   define('APP_NAME', 'Attendance Recording System');
   define('APP_VERSION', '1.0.0');
   define('TIMEZONE', 'Asia/Bangkok');
   define('DATE_FORMAT', 'Y-m-d');
   define('TIME_FORMAT', 'H:i:s');
   ?>
   ```

2. **Environment Variables**
   ```env
   # .env file
   APP_ENV=development
   APP_DEBUG=true
   APP_URL=http://localhost
   
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=attendance_system
   DB_USERNAME=attendance_user
   DB_PASSWORD=your_password
   
   MAIL_DRIVER=smtp
   MAIL_HOST=smtp.gmail.com
   MAIL_PORT=587
   MAIL_USERNAME=your_email@gmail.com
   MAIL_PASSWORD=your_app_password
   ```

### Web Server Configuration

#### Apache Configuration
```apache
# .htaccess
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ index.php [QSA,L]

# Security headers
Header always set X-Content-Type-Options nosniff
Header always set X-Frame-Options DENY
Header always set X-XSS-Protection "1; mode=block"
```

#### Nginx Configuration
```nginx
server {
    listen 80;
    server_name your-domain.com;
    root /var/www/html/AttendanceRecordingSystem;
    index index.php index.html;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location ~ \.php$ {
        fastcgi_pass unix:/var/run/php/php7.4-fpm.sock;
        fastcgi_index index.php;
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        include fastcgi_params;
    }
}
```

## Project Structure

```
AttendanceRecordingSystem/
├── assets/                     # Static assets
│   ├── css/                   # Stylesheets
│   ├── js/                    # JavaScript files
│   ├── images/                # Images and icons
│   └── fonts/                 # Font files
├── config/                    # Configuration files
│   ├── config.php            # Main configuration
│   ├── database.php          # Database configuration
│   └── constants.php         # Application constants
├── database/                  # Database files
│   ├── migrations/           # Database migrations
│   ├── seeds/                # Sample data
│   └── attendance_system.sql # Database schema
├── includes/                  # Include files
│   ├── header.php            # Common header
│   ├── footer.php            # Common footer
│   ├── sidebar.php           # Navigation sidebar
│   └── functions.php         # Utility functions
├── modules/                   # Application modules
│   ├── auth/                 # Authentication
│   ├── employees/            # Employee management
│   ├── attendance/           # Attendance tracking
│   ├── reports/              # Report generation
│   └── settings/             # System settings
├── uploads/                   # File uploads
├── logs/                     # Application logs
├── docs/                     # Documentation
├── tests/                    # Unit tests
├── .htaccess                 # Apache configuration
├── index.php                 # Main entry point
└── README.md                 # Project documentation
```

## Usage Guide

### Administrator Functions

1. **Employee Management**
   - Add new employees
   - Update employee information
   - Deactivate employees
   - Assign departments and roles

2. **Attendance Monitoring**
   - View real-time attendance
   - Generate attendance reports
   - Export data to Excel/PDF
   - Configure working hours and shifts

3. **System Configuration**
   - Set company holidays
   - Configure leave policies
   - Manage user permissions
   - System backup and maintenance

### Employee Functions

1. **Daily Check-in/Check-out**
   ```
   URL: /attendance/checkin
   - Click "Check In" button upon arrival
   - Click "Check Out" button when leaving
   - View daily attendance summary
   ```

2. **Attendance History**
   ```
   URL: /attendance/history
   - View monthly attendance records
   - Check total working hours
   - Review late arrivals and early departures
   ```

3. **Leave Management**
   ```
   URL: /leaves/apply
   - Submit leave applications
   - Check leave balance
   - View application status
   ```

## Development Workflow

### Setting Up Development Environment

1. **Install Development Tools**
   ```bash
   # Install Composer (for PHP dependencies)
   curl -sS https://getcomposer.org/installer | php
   sudo mv composer.phar /usr/local/bin/composer
   
   # Install Node.js packages (if using build tools)
   npm install
   
   # Install PHP dependencies
   composer install
   ```

2. **Development Server**
   ```bash
   # PHP built-in server
   php -S localhost:8000
   
   # Or use Apache/Nginx with virtual hosts
   ```

### Code Structure and Standards

1. **PHP Coding Standards**
   - Follow PSR-4 autoloading standards
   - Use meaningful variable and function names
   - Implement proper error handling
   - Add PHPDoc comments for functions

2. **Database Best Practices**
   - Use prepared statements for SQL queries
   - Implement proper indexing
   - Normalize database structure
   - Regular backup procedures

3. **Security Implementation**
   ```php
   // Input validation example
   function sanitizeInput($input) {
       return htmlspecialchars(trim(stripslashes($input)));
   }
   
   // SQL injection prevention
   $stmt = $pdo->prepare("SELECT * FROM employees WHERE id = ?");
   $stmt->execute([$employee_id]);
   ```

### Testing Procedures

1. **Unit Testing**
   ```bash
   # Run PHPUnit tests
   ./vendor/bin/phpunit tests/
   
   # Run specific test class
   ./vendor/bin/phpunit tests/AttendanceTest.php
   ```

2. **Manual Testing Checklist**
   - Employee registration and login
   - Check-in/check-out functionality
   - Report generation accuracy
   - Data export functionality
   - Permission-based access control

### Contributing Guidelines

1. **Fork and Clone**
   ```bash
   git clone https://github.com/YOUR_USERNAME/AttendanceRecordingSystem.git
   cd AttendanceRecordingSystem
   git remote add upstream https://github.com/jrKitt/AttendanceRecordingSystem.git
   ```

2. **Create Feature Branch**
   ```bash
   git checkout -b feature/new-feature-name
   ```

3. **Development Process**
   - Write clean, documented code
   - Follow existing code structure
   - Add tests for new features
   - Update documentation

4. **Submit Pull Request**
   ```bash
   git add .
   git commit -m "feat: add new feature description"
   git push origin feature/new-feature-name
   ```

## Deployment

### Production Deployment

1. **Server Requirements**
   - Linux server (Ubuntu 20.04+ recommended)
   - Minimum 4GB RAM, 2 CPU cores
   - 50GB storage space
   - SSL certificate for HTTPS

2. **Deployment Steps**
   ```bash
   # Clone to production server
   git clone https://github.com/jrKitt/AttendanceRecordingSystem.git
   cd AttendanceRecordingSystem
   
   # Install dependencies
   composer install --no-dev --optimize-autoloader
   
   # Set proper permissions
   sudo chown -R www-data:www-data storage/ uploads/
   sudo chmod -R 755 storage/ uploads/
   
   # Configure environment
   cp .env.example .env
   nano .env  # Update production settings
   ```

3. **SSL Configuration**
   ```bash
   # Install Certbot for Let's Encrypt
   sudo apt install certbot python3-certbot-apache
   
   # Obtain SSL certificate
   sudo certbot --apache -d your-domain.com
   ```

### Backup Procedures

1. **Database Backup**
   ```bash
   # Daily backup script
   #!/bin/bash
   DATE=$(date +%Y%m%d_%H%M%S)
   mysqldump -u root -p attendance_system > backup/db_backup_$DATE.sql
   gzip backup/db_backup_$DATE.sql
   
   # Keep only last 30 days of backups
   find backup/ -name "db_backup_*.sql.gz" -mtime +30 -delete
   ```

2. **File Backup**
   ```bash
   # Backup uploads and configuration
   tar -czf backup/files_backup_$DATE.tar.gz uploads/ config/
   ```

## Troubleshooting

### Common Issues

1. **Database Connection Issues**
   ```bash
   # Check MySQL service status
   sudo systemctl status mysql
   
   # Test database connection
   mysql -u attendance_user -p attendance_system
   
   # Check PHP MySQL extension
   php -m | grep mysql
   ```

2. **Permission Errors**
   ```bash
   # Fix file permissions
   sudo chown -R www-data:www-data /var/www/html/AttendanceRecordingSystem
   sudo chmod -R 755 /var/www/html/AttendanceRecordingSystem
   sudo chmod -R 777 uploads/ logs/  # Writable directories
   ```

3. **Session Issues**
   ```php
   // Check session configuration in PHP
   echo "Session save path: " . session_save_path();
   echo "Session name: " . session_name();
   
   // Ensure session directory is writable
   sudo chmod 777 /var/lib/php/sessions
   ```

4. **Performance Issues**
   ```bash
   # Check server resources
   htop
   df -h
   free -m
   
   # Enable PHP OPcache
   echo "opcache.enable=1" >> /etc/php/7.4/apache2/php.ini
   sudo systemctl restart apache2
   ```

### Debug Mode

1. **Enable Debug Logging**
   ```php
   // config.php
   define('DEBUG_MODE', true);
   define('LOG_ERRORS', true);
   error_reporting(E_ALL);
   ini_set('display_errors', 1);
   ```

2. **Check Error Logs**
   ```bash
   # Apache error logs
   tail -f /var/log/apache2/error.log
   
   # Application logs
   tail -f logs/application.log
   ```

## Security Considerations

### Data Protection
- Implement proper input validation and sanitization
- Use prepared statements for database queries
- Hash passwords using secure algorithms (bcrypt)
- Implement CSRF protection
- Regular security updates

### Access Control
- Role-based permission system
- Session timeout implementation
- Strong password policies
- Failed login attempt monitoring
- Audit trail for sensitive operations

## Performance Optimization

### Database Optimization
- Proper indexing on frequently queried columns
- Query optimization and caching
- Regular database maintenance
- Connection pooling

### Application Optimization
- Enable PHP OPcache
- Implement application-level caching
- Optimize images and static assets
- Use CDN for static content delivery

## API Documentation

### Authentication Endpoints
```
POST /api/auth/login
POST /api/auth/logout
POST /api/auth/refresh
```

### Attendance Endpoints
```
GET /api/attendance/today
POST /api/attendance/checkin
POST /api/attendance/checkout
GET /api/attendance/history/{employee_id}
```

### Reports Endpoints
```
GET /api/reports/daily/{date}
GET /api/reports/monthly/{year}/{month}
GET /api/reports/employee/{employee_id}
POST /api/reports/export
```

## Future Enhancements

### Planned Features
1. **Mobile Application**
   - Native iOS/Android apps
   - Push notifications
   - Offline capability

2. **Advanced Analytics**
   - Attendance pattern analysis
   - Productivity metrics
   - Predictive analytics

3. **Integration Features**
   - Payroll system integration
   - HR management system sync
   - Slack/Teams notifications

4. **Enhanced Security**
   - Two-factor authentication
   - Biometric verification
   - IP-based access control

## Support and Maintenance

### Documentation
- User manual for end-users
- Administrator guide
- API documentation
- Database schema documentation

### Support Channels
- GitHub Issues for bug reports
- Wiki for detailed guides
- Email support for critical issues

## License

This project is developed for educational and internship purposes. Please check with the original author for licensing terms and commercial usage rights.

## Acknowledgments

- Developed during internship at IT NETWORK (2023)
- Thanks to mentors and supervisors for guidance
- Special thanks to the IT NETWORK team for project requirements and feedback

---

**Note**: This system handles sensitive employee data. Ensure compliance with local data protection regulations (GDPR, PDPA, etc.) when deploying in production environments. Regular security audits and updates are recommended.
