// bootstrap.js

// Import necessary libraries and components
import 'bootstrap/dist/css/bootstrap.min.css'
import 'bootstrap/dist/js/bootstrap.bundle.min'

// Optionally, include jQuery if needed for Bootstrap's JavaScript plugins
// import $ from 'jquery'
// window.jQuery = $
// window.$ = $

// Custom initialization for Bootstrap components
document.addEventListener('DOMContentLoaded', () => {
    // Initialize Bootstrap tooltips
    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    const tooltipList = tooltipTriggerList.map((tooltipTriggerEl) => {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })

    // Initialize Bootstrap popovers
    const popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
    const popoverList = popoverTriggerList.map((popoverTriggerEl) => {
        return new bootstrap.Popover(popoverTriggerEl)
    })

    // Initialize other Bootstrap components as needed
    console.log('Bootstrap components initialized!')
})
