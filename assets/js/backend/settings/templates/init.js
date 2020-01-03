jQuery(document).ready(function($) {
	
	function validateForm($this) {
		var name = "{patient name}";
		var date = "{date}";
		var x = $this.find("#smsMessage").val();
		var y = $this.find("#emailMessage").val();
console.log(x);
console.log(y);
		if (x == null || x == "" || y == null || y == "") {
			alert("Both the SMS and Email messages must be filled out. Thank you.");
			return false;
		}

		if ((-1 == x.indexOf(name)) || (-1 == x.indexOf(date)) || (-1 == y.indexOf(name)) || (-1 == y.indexOf(date))) {
			alert("Both the SMS and Email messages must include the {patient name} and {date} tags. Thank you.");
			return false;
		}
		return true;
	}

	var maxLength = 160;

	function imposeMaxLength(el) {
		//return (Object.value.length <= MaxLen);
		if (el.value.length > maxLength) return false;
		return true;
	}

	function characterCount(el) {
		var totalcount = el.val().length;
		var charCount = $('#charCount').text( totalcount );
		// if (el.value.length > maxLength) el.value = el.value.substring(0, maxLength);
		//if (charCount) charCount.innerHTML = maxLength - el.value.length; 
	}

	$(document).on('keyup', '#smsMessage', function(event) {
		event.preventDefault();
		characterCount($(this));		
	});

	$(document).on('submit', '#messageModalForm', function(event) {
		event.preventDefault();
		validateForm($(this));		
	});
});