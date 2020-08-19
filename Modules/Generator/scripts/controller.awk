BEGIN { }
                            { print $0 }
/generalValidations/        { print g  }
/insertValidations/         { print i  }
/customValidationMessages/  { print m  } 
END { }