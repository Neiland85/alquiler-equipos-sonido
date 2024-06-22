// stimulus.js

// Import and register all your controllers from the importmap under controllers/**/*_controller
import { application } from "controllers/application"

import { definitionsFromContext } from "@hotwired/stimulus-loading"
const context = require.context("controllers", true, /_controller\.js$/)
application.load(definitionsFromContext(context))
