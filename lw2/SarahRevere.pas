PROGRAM PaulRevere(INPUT, OUTPUT);
USES DOS;
VAR
  GetLanterns: STRING;
BEGIN {PaulRevere}
  WRITELN('Content-Type: text/plain');
  WRITELN;
  GetLanterns := GetEnv('QUERY_STRING');
  IF GetLanterns = 'lanterns=1'
  THEN
    WRITELN('The British are coming by land.')
  ELSE
    IF GetLanterns = 'lanterns=2'
    THEN
      WRITELN('The British are coming by sea.')
    ELSE
      WRITELN('Sarah didn''t say.')
END. {PaulRevere}