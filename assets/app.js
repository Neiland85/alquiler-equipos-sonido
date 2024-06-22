// app.js

// Import necessary modules and libraries
import { Turbo } from "@hotwired/turbo"
import { Application } from "@hotwired/stimulus"
import { definitionsFromContext } from "@hotwired/stimulus-loading"

// Initialize Turbo
Turbo.start()

// Initialize Stimulus
const application = Application.start()
const context = require.context("./controllers", true, /\.js$/)
application.load(definitionsFromContext(context))

// Import styles
import "./styles/app.css"

// Additional custom scripts
document.addEventListener('DOMContentLoaded', () => {
    console.log('App is running!');
    // Add your custom JavaScript code here
});
