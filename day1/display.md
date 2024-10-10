## For Display Of Staments in PHP there are Two Methods Available
  - By echo
  - By print

## echo
   - By Single Quotes and Double Quotes
     - # Variable Interpolation
          - Double Quotes (" "): When you use double quotes, PHP parses the string for variables and special escape sequences, replacing them with their values.
          - Single Quotes (' '): PHP treats everything inside single quotes as a literal string, meaning variables will not be parsed or replaced with their values.
      - # Escape Seuences
           - Double Quotes (" "): Certain escape sequences (like \n, \t, etc.) are recognized and interpreted.
           - Single Quotes (' '): Escape sequences are not interpreted (except for \' and \\). So, if you want to use special characters, you have to escape them explicitly.
      - # Performance
          - Double Quotes (" "): PHP has to parse the string, looking for variables and escape sequences. This can add a slight overhead, but the difference is generally negligible unless you're working with a large number of strings or in performance-critical situations.
          - Single Quotes (' '): PHP does not parse the string for variables or escape sequences, so it is slightly faster than double quotes, but again, this performance difference is usually minor.
       - # Concatenation
          -  Double Quotes (" "): You can directly include variables without needing to concatenate them.
          - Single Quotes (' '): If you want to include variables in a single-quoted string, you have to concatenate them manually using the concatenation operator (.).

## Implode and Explode 
    - implode() and explode() are two fundamental functions in PHP used for string manipulation, but they serve opposite purposes. Here’s a breakdown of the differences between the two, along with examples.
    - Funtionality:
        -  implode(): Joins array elements into a single string using a specified separator.
        - explode(): Splits a string into an array based on a specified delimiter.

         