function validate()
{
  const letters = /^[A-Za-z]+$/;
  const email = /\S+@\S+/;
  if( !document.myForm.Name.value.match(letters) )
  {
    alert( "Please provide your name!" );
    document.myForm.Name.focus() ;
    return (false);
  }

  else if( document.myForm.Surname.value == "" )
  {
    alert( "Please provide your surname!" );
    document.myForm.Name.focus() ;
    return (false);
  }

  else if( !document.myForm.Email.value.match(email) )
  {
    alert( "Please provide a valid E-mail address!");
    return (false);
  }

  else if( document.myForm.Comments.value == "" )
  {
    alert( "Please provide some comments!");
    return (false);
  }

  else
  {
    return(true);
  }
}
