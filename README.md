# Web-training---IEEE-CS23-ZSB
Web training - IEEE CS23 ZSB
- To cancel `reset --hard `
```bash
    git reset --hard HEAD@{1}
```
- To Create file with loop
```bash
    for /L %variable in (start,step,end) do command
    # Example
    for /L %i in (1,1,6) do touch %i.php
    for /L %i in (1,1,6) do echo %i.php
    # for each
    for %variable in (set) do command
    for %i in (1.one 2.two 3.three 4.four 5.five 6.six) do touch %i.php

```