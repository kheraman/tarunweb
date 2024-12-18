const express = require("express");
const { exec } = require("child_process");
const path = require("path");
const fs = require("fs");
require("dotenv").config(); // Load .env variables
const app = express();
const PORT = process.env.PORT;

// Serve static files (HTML, CSS, JS, etc.)
app.use(express.static("public"));

// Middleware: Default routing to index.php
app.use((req, res, next) => {
    // If the request is for a directory, check for index.php
    if (req.path.endsWith("/")) {
        const indexPhpPath = path.join(__dirname, "php-files", req.path, "index.php");
        if (fs.existsSync(indexPhpPath)) {
            return executePHP(indexPhpPath, res);
        }
    }
    next();
});

// Route to serve PHP files
app.get("*.php", (req, res) => {
    const phpFilePath = path.join(__dirname, "php-files", req.path);
    if (fs.existsSync(phpFilePath)) {
        return executePHP(phpFilePath, res);
    } else {
        res.status(404).send("404 - File not found");
    }
});

// Helper function to execute PHP scripts
function executePHP(filePath, res) {
    exec(`php ${filePath}`, (error, stdout, stderr) => {
        if (error) {
            console.error(`Error executing PHP: ${stderr}`);
            return res.status(500).send("Error executing PHP script.");
        }
        res.send(stdout);
    });
}

// Start the Express server
app.listen(PORT, () => {
    console.log(`Server running at http://localhost:${PORT}`);
    console.log("Place your PHP files in the 'php-files' directory.");
});