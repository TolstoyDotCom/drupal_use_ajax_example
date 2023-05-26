This module illustrates how 'use-ajax' links can fail silently.

Enable the module, visit the page use-ajax-example/link_page at the site
and note the dialog.

Then, uncomment the exception on line 19 of the controller and try again.

The link will no longer work and the user will be left wondering
what went wrong. The exception will, however, be noted in the log.

