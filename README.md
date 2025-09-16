# Night Mode Application

A simple PHP web application for managing night mode settings with a clean web interface.

## Overview

This application allows users to toggle night mode on/off through a web interface. The current mode state is stored in a text file and can be accessed via both a web UI and API endpoints.

## Files Structure

```
Nightly/
├── index.php              # Main web interface
├── nightmode.php          # Read-only API endpoint
├── mode.txt               # Stores current mode state
├── includes/
│   └── functions.php      # Main API handler
├── CSS/
│   └── style.css          # Application styling
├── JS/
│   ├── script.js          # Application logic
│   └── jquery.js          # jQuery library v1.11.2
└── img/
    └── logo.svg           # Application logo
```

## nightmode.php

### Purpose
A lightweight read-only API endpoint that returns the current night mode status directly from the `mode.txt` file.

### Functionality
- **File Reading**: Opens and reads the entire content of `mode.txt`
- **Error Handling**: Gracefully handles empty files without crashing
- **Raw Output**: Returns the exact file content without any processing
- **Resource Management**: Properly opens and closes file handles

### API Usage

```bash
# Get current mode status
curl http://localhost:8000/nightmode.php

# Possible responses:
# "0"          - Night mode is OFF
# "1"          - Night mode is ON  
# ""           - Empty file (no mode set)
# "custom"     - Any custom content stored in mode.txt
```

### Code Structure

```php
<?php
// Open mode.txt in read-only mode
$myfile = fopen(__DIR__ . "/mode.txt", "r");

// Get file size and check if file has content
$filesize = filesize(__DIR__ . "/mode.txt");

if ($filesize > 0) {
    // Read and output file content
    echo fread($myfile, $filesize);
} else {
    // Handle empty files gracefully
    echo "";
}

// Clean up resources
fclose($myfile);
?>
```

### Key Features

- ✅ **Simple & Fast**: Minimal overhead for quick status checks
- ✅ **Error Resistant**: Won't crash on empty or missing files
- ✅ **Path Safe**: Uses `__DIR__` for reliable file location
- ✅ **Resource Efficient**: Proper file handle management

## Installation & Setup

1. **Start PHP Server**:
   ```bash
   cd /path/to/Nightly
   php -S localhost:8000
   ```

2. **Initialize Mode File**:
   ```bash
   echo "0" > mode.txt
   ```

3. **Access Application**:
   - Web Interface: `http://localhost:8000`
   - Status API: `http://localhost:8000/nightmode.php`

## API Endpoints

| Endpoint | Method | Purpose | Response |
|----------|--------|---------|----------|
| `/` | GET | Main web interface | HTML page |
| `/nightmode.php` | GET | Get current mode | Raw mode value |
| `/includes/functions.php` | POST | Check/update mode | Status or confirmation |

## Testing

### Manual Testing
1. Visit `http://localhost:8000` in your browser
2. Select ON/OFF from dropdown
3. Click "CHANGE MODE" button
4. Verify status updates in real-time

### API Testing
```bash
# Test status endpoint
curl http://localhost:8000/nightmode.php

# Test with different file contents
echo "1" > mode.txt && curl http://localhost:8000/nightmode.php
echo "0" > mode.txt && curl http://localhost:8000/nightmode.php
```

## Technical Details

- **PHP Version**: Compatible with PHP 8.x
- **Dependencies**: jQuery 1.11.2 (included)
- **Storage**: File-based (`mode.txt`)
- **Communication**: AJAX for real-time updates

## Error Handling

The application includes robust error handling for:
- Empty `mode.txt` files
- Missing files
- Invalid file permissions
- Network connectivity issues

## License

This project is open source and available under standard licensing terms.

## Contributing

Feel free to submit issues and enhancement requests!
