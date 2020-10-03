BEGIN { }
/timestamps/  { print campos} 
              { print $0 }
END { }
