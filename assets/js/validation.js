$(document).ready(function(){
	$("#login").validate({
		rules: {
			email: {
				required:true
			},
			password: {
				required: true,
				minlength:5
			}
		},
		messages: {
			email: {
				required: "Email atau Username Tidak Boleh Kosong"
			},
			password: {
				required: "Password Tidak Boleh Kosong",
				minlength: "Minimal 5 Karakter"
			}
		},
		submitHandler: function(form) {
	      form.submit();
	    }
	});
	$('#register').validate({
		rules : {
			firstname : {
				required:true
			},
			name : {
				required:true,
				maxlength:50
			},
			email : {
				email : true,
				required: true,
				maxlength:50
			},
			username : {
				required: true,
				minlength:8,
				maxlength:50	
			},
			password : {
				required: true,
				minlength:8,
				maxlength:20
			},
			retypepassword : {
				required: true,
				minlength:8,
				maxlength:20,
				equalTo:'#password'
			},
			phonenumber : {
				required:true,
				digits: true,
				minlength:9,
				maxlength:13
			},
			country : {
				required:true
			},
			tos : {
				required:true
			},
			age : {
				required:true
			}
		},
		messages : {
			firstname : {
				required: "Nick Name Tidak Boleh Kosong",
				maxlength: "Maksimal Input 20 Karakter"
			},
			name : {
				required: "Full Name Tidak Boleh Kosong",
				maxlength: "Maksimal Input 50 Karakter"
			},
			email : {
				email : "Input harus type email",
				required: "Email Tidak Boleh Kosong",
				minlength: "Minimal Input 8 Karakter",
				maxlength: "Maksimal Input 50 Karakter"
			},
			username : {
				required: "Username Tidak Boleh Kosong",
				minlength: "Minimal Input 8 Karakter",
				maxlength: "Maksimal Input 20 Karakter"	
			},
			password : {
				required: "Password Tidak Boleh Kosong",
				minlength: "Minimal Input 8 Karakter",
				maxlength: "Maksimal Input 20 Karakter"
			},
			retypepassword :{
				required: "Password Tidak Boleh Kosong",
				minlength: "Minimal Input 8 Karakter",
				maxlength: "Maksimal Input 20 Karakter",
				equalTo: "Password Tidak Sama"
			},
			phonenumber : {
				digits: "Input harus angka",
				required: "Phone Number Tidak Boleh Kosong",
				minlength: "Minimal Input 9 Angka",
				maxlength: "Maksimal Input 13 Angka"
			},
			country: {
				required : "Country Tidak Boleh Kosong"
			},
			tos: {
				required : "Please Check Padiplay term of use"
			},
			age : {
				required : "Please Confirm Your Age"
			}
		},
		submitHandler: function(form) {
	      form.submit();
	    }
	});
	$('#forget_pass').validate({
		rules : {
			emailUser : {
				email : true,
				required: true
			}
		},
		messages : {
			emailUser : {
				email : "Input harus type email",
				required: "Email Tidak Boleh Kosong"
			}
		},
		submitHandler: function(form) {
	      form.submit();
	    }
	});
	$('#tournament').validate({
		rules : {
			name : {
				required: true
			},
			discipline : {
				required: true
			},
			platforms : {
				required: true
			},
			size : {
				required: true,
				digits: true
			},
			participant_type : {
				required: true
			},
			timezoneAmerica : {
				required: true
			}
		},
		messages : {
			name : {
				required: "Tournament Name Tidak Boleh Kosong"
			},
			discipline : {
				required: "Please Choose Your Game"
			},
			platforms : {
				required: "Please Choose Your Platforms"
			},
			size : {
				required: "Tournament Size Tidak Boleh Kosong",
				digits: "Input Harus Angka"
			},
			participant_type : {
				required: "Please Choose Your Participant Type"
			},
			timezoneAmerica : {
				required: "Please Choose Your Timezone"
			}
		},
		submitHandler: function(form) {
	      form.submit();
	    }
	});
	$('#setting_general').validate({
		rules : {
			GameName : {
				required: true
			},
			completeGameName : {
				required: true
			},
			discipline : {
				required: true
			},
			platForms : {
				required: true,
				digits: true
			},
			organizerName : {
				required: true
			},
			size : {
				required: true,
				digits: true
			},
			country : {
				required: true
			},
			startDate : {
				required: true
			},
			endDate : {
				required: true
			},
			start_time : {
				required: true
			},
			end_time : {
				required: true
			},
			bracket : {
				required: true
			},
			timeZone : {
				required: true
			},
			description : {
				required: true
			},
			prize : {
				required: true
			},
			rules : {
				required: true
			}
		},
		messages : {
			GameName : {
				required: "Name Tidak Boleh Kosong"
			},
			completeGameName : {
				required: "Complete Name Tidak Boleh Kosong"
			},
			discipline : {
				required: "Discipline Tidak Boleh Kosong"
			},
			platForms : {
				required: "Platforms Tidak Boleh Kosong"
			},
			organizerName : {
				required: "Organizer Name Tidak Boleh Kosong"
			},
			size : {
				required: "Size Tidak Boleh Kosong",
				digits : "Input Harus Angka"
			},
			country : {
				required: "Country Tidak Boleh Kosong"
			},
			startDate : {
				required: "Start Date Tidak Boleh Kosong"
			},
			endDate : {
				required: "End Date Tidak Boleh Kosong"
			},
			start_time : {
				required: "Start Time Tidak Boleh Kosong"
			},
			end_time : {
				required: "End Time Tidak Boleh Kosong"
			},
			bracket : {
				required: "Bracket Tidak Boleh Kosong"
			},
			timeZone : {
				required: "Timezone Tidak Boleh Kosong"
			},
			description : {
				required: "Description Tidak Boleh Kosong"
			},
			prize : {
				required: "Prize Tidak Boleh Kosong"
			},
			rules : {
				required: "Rules Tidak Boleh Kosong"
			}
		},
		submitHandler: function(form) {
	      form.submit();
	    }
	});
	$('#registration_setting').validate({
		rules : {
			registration : {
				required : true
			},
			start : {
				required: true
			},
			end : {
				required: true
			},
			accept : {
				required: true
			},
			notification : {
				required: true
			},
			// fMessage : {
			// 	required: true
			// },
			// vMessage : {
			// 	required: true
			// },
			// rMessage : {
			// 	required: true
			// },
			// regulations : {
			// 	required: true
			// },
			// discord : {
			// 	required: true,
			// 	url : true
			// }
		},
		messages : {
			registration : {
				required : "Enable Registration Tidak Boleh Kosong"
			},
			start : {
				required: "Registration Opening Tidak Boleh Kosong"
			},
			end : {
				required: "Registration Clossing Tidak Boleh Kosong"
			},
			accept : {
				required: "Accept Registration Automatically Tidak Boleh Kosong"
			},
			notification : {
				required: "Enable Organizer Notification Email Tidak Boleh Kosong"
			},
			// fMessage : {
			// 	required: "Form Message Tidak Boleh Kosong"
			// },
			// vMessage : {
			// 	required: "Validation Message Tidak Boleh Kosong"
			// },
			// rMessage : {
			// 	required: "Refusal Message Tidak Boleh Kosong"
			// },
			// regulations : {
			// 	required: "Add Your Own Legal Regulations Tidak Boleh Kosong"
			// },
			// discord : {
			// 	required: "Regulation URL Tidak Boleh Kosong",
			// 	url : "Input Harus Type URL"
			// }
		},
		submitHandler: function(form) {
	      form.submit();
	    }
	});

	// Join Tournament

	$('#registrationFrm').validate({
		rules : {
			termCondition : {
				required : true
			},
			start : {
				required: true
			},
			end : {
				required: true
			},
			accept : {
				required: true
			},
			notification : {
				required: true
			}
		},
		messages : {
			termCondition : {
				required : "Term of Use Tidak Boleh Kosong"
			},
			start : {
				required: "Registration Opening Tidak Boleh Kosong"
			},
			end : {
				required: "Registration Clossing Tidak Boleh Kosong"
			},
			accept : {
				required: "Accept Registration Automatically Tidak Boleh Kosong"
			},
			notification : {
				required: "Enable Organizer Notification Email Tidak Boleh Kosong"
			}
		},
		submitHandler: function(form) {
	      form.submit();
	    }
	});

	$('#registration_setting_caster').validate({
		rules : {
			registration : {
				required : true
			},
			start : {
				required: true
			},
			end : {
				required: true
			},
			accept : {
				required: true
			},
			notification : {
				required: true
			},
			// fMessage : {
			// 	required: true
			// },
			// vMessage : {
			// 	required: true
			// },
			// rMessage : {
			// 	required: true
			// },
			// regulations : {
			// 	required: true
			// },
			// discord : {
			// 	required: true,
			// 	url : true
			// }
		},
		messages : {
			registration : {
				required : "Enable Registration Tidak Boleh Kosong"
			},
			start : {
				required: "Registration Opening Tidak Boleh Kosong"
			},
			end : {
				required: "Registration Clossing Tidak Boleh Kosong"
			},
			accept : {
				required: "Accept Registration Automatically Tidak Boleh Kosong"
			},
			notification : {
				required: "Enable Organizer Notification Email Tidak Boleh Kosong"
			},
			// fMessage : {
			// 	required: "Form Message Tidak Boleh Kosong"
			// },
			// vMessage : {
			// 	required: "Validation Message Tidak Boleh Kosong"
			// },
			// rMessage : {
			// 	required: "Refusal Message Tidak Boleh Kosong"
			// },
			// regulations : {
			// 	required: "Add Your Own Legal Regulations Tidak Boleh Kosong"
			// },
			// discord : {
			// 	required: "Regulation URL Tidak Boleh Kosong",
			// 	url : "Input Harus Type URL"
			// }
		},
		submitHandler: function(form) {
	      form.submit();
	    }
	});
	$('#setting_participant').validate({
		rules : {
			checkin : {
				required : true
			},
			checkinParticipant : {
				required: true
			},
			closingParticipant : {
				required: true
			},
			timeStart : {
				required: true
			},
			timeEnd : {
				required: true
			},
			checkinType : {
				required: true
			}
		},
		messages : {
			checkin : {
				required : "Enable Tournament Check-in By Tidak Boleh Kosong"
			},
			checkinParticipant : {
				required: "Participant check-in opening Tidak Boleh Kosong"
			},
			closingParticipant : {
				required: "Participant check-in closing Tidak Boleh Kosong"
			},
			timeStart : {
				required: "Time Start Tidak Boleh Kosong"
			},
			timeEnd : {
				required: "Time End Tidak Boleh Kosong"
			},
			checkinType : {
				required: "Type of Participant Tidak Boleh Kosong"
			}
		},
		submitHandler: function(form) {
	      form.submit();
	    }
	});
	$('#add_stream').validate({
		rules : {
			nameStreams : {
				required: true
			},
			urlStreams : {
				required: true,
				url: true
			}
		},
		messages : {
			nameStreams : {
				required: "Name Stream Tidak Boleh Kosong"
			},
			urlStreams : {
				required: "Url Stream Tidak Boleh Kosong",
				url: "Input Harus Type Url"
			}
		},
		submitHandler: function(form) {
	      form.submit();
	    }
	});
	$('#edit_stream').validate({
		rules : {
			nameStreams : {
				required: true
			},
			urlStreams : {
				required: true,
				url: true
			}
		},
		messages : {
			nameStreams : {
				required: "Name Stream Tidak Boleh Kosong"
			},
			urlStreams : {
				required: "Url Stream Tidak Boleh Kosong",
				url: "Input Harus Type Url"
			}
		},
		submitHandler: function(form) {
	      form.submit();
	    }
	});
	// $('#match_schedule_detail').validate({
	// 	rules : {
	// 		match_date : {
	// 			required: true
	// 		},
	// 		match_time : {
	// 			required: true
	// 		}
	// 	},
	// 	messages : {
	// 		match_date : {
	// 			required: "Start Date Tidak Boleh Kosong"
	// 		},
	// 		match_time : {
	// 			required: "Time Tidak Boleh Kosong"
	// 		}
	// 	},
	// 	submitHandler: function(form) {
	//       form.submit();
	//     }
	// });
	$('#match_detail').validate({
		rules : {
			score : {
				required: true
			},
			score : {
				required: true
			}
		},
		messages : {
			score : {
				required: "Score Tidak Boleh Kosong"
			},
			score : {
				required: "Score Tidak Boleh Kosong"
			}
		},
		submitHandler: function(form) {
	      form.submit();
	    }
	});
})

function showHidePasswordfn() {
		  var pass = document.getElementById('password');
		  if (pass.type === "password") {
		    pass.type = "text";
		    $('span.btn-app-regis').text('Hide');
		  } else {
		    pass.type = "password";
		    $('span.btn-app-regis').text('Show');
		  }
}

function showHidePassword() {
		  var pass = document.getElementById('password1');
		  if (pass.type === "password") {
		    pass.type = "text";
		    $('span.btn-app-regis-rety').text('Hide');
		  } else {
		    pass.type = "password";
		    $('span.btn-app-regis-rety').text('Show');
		  }
}
		// On Click.
		$('.btn-pwd').on('click', showHidePasswordfn);

		$('.btn-pwd1').on('click', showHidePassword);