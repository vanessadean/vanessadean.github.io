<?php
	###################################
	# Jonathan Grover - Simple Mailer #
	# v0.1 Beta for PHP 5             #
	# Date Modified: 12/22/2012       #
	# MIT License (see details below) #
    ###################################

	// Set email address to send to i.e: you@yoursite.com
	$sendTo		=	'vanessa.dean@gmail.com';

	// Set email subject (appears as subject)
	$subject 	= 	'thisisvanessa - Contact Form Submission';

	/* No need to touch the code below this line! */

	// get posted form values
	$message 	= 	$_POST['message'];

	// construct email body 
	$body 		=	$message;

		// send email
		mail($sendTo, $subject, $body);
		
		//go to success page
		header('Location: contact.html');
		exit;

	/*
	Copyright (c) 2013 Jonathan Grover

	Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

	The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

	THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
	*/
?>