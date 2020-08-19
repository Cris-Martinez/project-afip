BEGIN { }
{
    if (match($0, "__post__"))  print campos 
    else                        print $0 
}
END { }