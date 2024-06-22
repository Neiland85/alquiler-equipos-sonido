// turbo.js

// Import Turbo from the hotwired/turbo package
import { Turbo } from "@hotwired/turbo"

// Start Turbo
Turbo.start()

// Optionally configure Turbo options
Turbo.session.drive = true  // Enables Turbo Drive to automatically manage history and page transitions
