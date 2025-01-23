# File Comparison Tool

This tool allows users to compare two input files containing lexicographically sorted ASCII strings. It identifies strings that are unique to each file and generates two output files with the results. The tool is implemented using PHP, HTML, and CSS.

## Features
- Upload two input files through a web interface.
- Generate two output files:
  - `output1.txt`: Strings present in the first file but not in the second.
  - `output2.txt`: Strings present in the second file but not in the first.
- Downloadable output files after processing.
- Simple and responsive design for user convenience.

## File Structure
```
project-folder/
├── index.html         # Frontend upload form
├── process.php        # Backend logic to process files
├── output1.txt        # Generated file: Strings unique to the first input file
├── output2.txt        # Generated file: Strings unique to the second input file
```

## Prerequisites
- A web server with PHP installed (e.g., Apache, Nginx, or a local server like XAMPP).

## Installation
1. Download and extract the project files to your web server directory.
2. Ensure the server has write permissions for the directory to generate output files.

## Usage
### 1. Upload Files
1. Open `index.html` in a web browser (or visit the deployed tool on your server).
2. Upload two input files containing lexicographically sorted ASCII strings.
3. Click the **Compare** button.

### 2. View Results
- After processing, the tool will display links to download:
  - `output1.txt`: Strings unique to the first file.
  - `output2.txt`: Strings unique to the second file.

## Example Input and Output
### Input Files
- **input1.txt**:
  ```
apple
banana
cherry
```
- **input2.txt**:
  ```
banana
date
fig
```

### Output Files
- **output1.txt**:
  ```
apple
cherry
```
- **output2.txt**:
  ```
date
fig
```

## Customization
### CSS Styling
Modify the `index.html` file to customize the design:
```css
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f9;
}
```

### PHP Logic
You can adjust `process.php` for additional functionality or error handling.

## License
This project is open-source and free to use. Modify and distribute as needed.
