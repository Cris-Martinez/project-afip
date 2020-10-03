BEGIN { }
            { print $0     }
/fillable/  { print campos } 
END { }
