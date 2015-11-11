<?php if(!defined('KIRBY')) exit ?>

title: Contact
pages: false
files: false
fields:
	title:
		label: Title
		type:  text
	locations: 
		label: Locations
		type: structure
		entry: >
			<div style="overflow: auto;">
				<div style="float:left; width:50%;">
					<strong>{{location}}</strong>
				</div>
				<div style="float:right; width:50%;">
					{{address}}<br/>
					{{phone}}<br/>
					{{email}}
				</div>
			</div>
		fields: 
			location:
				label: Location
				type:  text
			address:
				label: Address
				type:  textarea
			phone:
				label: Phone
			email:
				label: Email
				type: email