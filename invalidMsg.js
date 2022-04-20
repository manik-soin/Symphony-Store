  
function InvalidMsg(textbox) {
  
            if (textbox.value === '') {
                textbox.setCustomValidity
                      ('Please do not leave the fields empty');
            }  else {
                textbox.setCustomValidity('');
            }
  
            return true;
        }
        