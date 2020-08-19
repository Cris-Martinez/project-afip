BEGIN { }
        { print $0     }
/index/ { print campos } 
END { }
