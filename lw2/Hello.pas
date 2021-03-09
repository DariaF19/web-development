PROGRAM Hello(INPUT, OUTPUT);
USES DOS;
VAR
  Name: STRING;
BEGIN {PaulRevere}
  WRITELN('Content-Type: text/plain');
  WRITELN;
  Name := GetEnv('QUERY_STRING');
  IF Name = 'lanterns=1'
  THEN
    WRITELN('The British are coming by land.')
  ELSE
    IF Name = 'lanterns=2'
    THEN
      WRITELN('The British are coming by sea.')
    ELSE
      WRITELN('Sarah didn''t say.')
END. {PaulRevere}