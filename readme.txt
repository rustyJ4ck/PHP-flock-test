Windows 7, php 5.5.11
---------------------

On windows NB ignored?

cmd> test.bat

start #1 sleep 0
[0.00000] #1 loop end [awaiting 0.00] wblock 0
[0.00000] #1 got lock [awaiting 0.00], go to sleep 1
start #2 sleep 8
sstart #11 sleep 6
tart #3 sleep 0
start #12 sleep 3
start #5 sleep 2
start #4 sleep 6
[0.99205] #11 try get lock 0.99
[1.01105] done #1
[0.99205] #11 got lock [awaiting 0.99], go to sleep 1
[1.96411] #12 try get lock 1.96
[1.96411] #12 got lock [awaiting 1.96], go to sleep 1
[2.03611] done #11
[3.01317] #3 loop end [awaiting 3.01] wblock 0
[3.01317] #3 got lock [awaiting 3.01], go to sleep 3
[2.97517] done #12
[5.95123] #4 loop end [awaiting 5.95] wblock 0
[6.02223] done #3
[5.95123] #4 got lock [awaiting 5.95], go to sleep 3
[9.04123] #2 loop end [awaiting 9.03] wblock 0
[8.95123] done #4
[9.04123] #2 got lock [awaiting 9.03], go to sleep 4
[12.98424] #5 loop end [awaiting 12.98] wblock 0
[13.04124] done #2
[12.98424] #5 got lock [awaiting 12.98], go to sleep 4
[16.98424] done #5


FreeBSD, PHP 5.6.8
------------------

$ ./test.sh

# start #3 sleep 4
[0.00046] #3 loop end [awaiting 0.00] wblock 0
[0.00059] #3 got lock [awaiting 0.00], go to sleep 1
start #2 sleep 1
[0.00038] #2 try get lock 1/0.00
start #4 sleep 1
start #5 sleep 1
start #11 sleep 4
[0.06496] #4 try get lock 1/0.00
start #1 sleep 7
[0.00034] #1 try get lock 1/0.00
[0.01867] #5 try get lock 1/0.00
start #12 sleep 5
[1.00165] done #3
[0.90096] #11 try get lock 0.90
[0.90120] #11 got lock [awaiting 0.90], go to sleep 1
[1.00112] #2 try get lock 2/1.00
[1.06562] #4 try get lock 2/1.00
[1.00147] #1 try get lock 2/1.00
[1.01963] #5 try get lock 2/1.00
[1.90241] done #11
[2.01162] #2 try get lock 3/2.01
[1.90441] #12 try get lock 1.90
[1.90457] #12 got lock [awaiting 1.90], go to sleep 3
[2.06662] #4 try get lock 3/2.00
[2.00248] #1 try get lock 3/2.00
[2.02067] #5 try get lock 3/2.00
[3.01213] #2 try get lock 4/3.01
[3.06763] #4 try get lock 4/3.00
[3.00348] #1 try get lock 4/3.00
[3.02164] #5 try get lock 4/3.00
[4.01314] #2 try get lock 5/4.01
[4.06862] #4 try get lock 5/4.00
[4.00448] #1 try get lock 5/4.00
[4.02254] #5 try get lock 5/4.00
[4.90585] done #12
[5.03446] #2 loop end [awaiting 5.03] wblock 0
[5.03449] #2 got lock [awaiting 5.03], go to sleep 3
[5.06962] #4 try get lock 6/5.00
[5.00548] #1 try get lock 6/5.01
[5.02354] #5 try get lock 6/5.00
[6.07063] #4 try get lock 7/6.01
[6.00649] #1 try get lock 7/6.01
[6.02456] #5 try get lock 7/6.01
[7.07163] #4 try get lock 8/7.01
[7.00749] #1 try get lock 8/7.01
[7.02554] #5 try get lock 8/7.01
[8.03520] done #2
[8.07265] #4 loop end [awaiting 8.01] wblock 0
[8.07269] #4 got lock [awaiting 8.01], go to sleep 5
[8.00849] #1 try get lock 9/8.01
[8.02655] #5 try get lock 9/8.01
[9.00951] #1 try get lock 10/9.01
[9.02758] #5 try get lock 10/9.01
[10.01052] #1 try get lock 11/10.01
[10.02861] #5 try get lock 11/10.01
[11.01151] #1 try get lock 12/11.01
[11.02960] #5 try get lock 12/11.01
[12.01251] #1 try get lock 13/12.01
[12.03060] #5 try get lock 13/12.01
[13.07371] done #4
[13.01822] #1 loop end [awaiting 13.02] wblock 0
[13.01825] #1 got lock [awaiting 13.02], go to sleep 1
[13.03630] #5 try get lock 14/13.02
[14.01857] done #1
[14.05608] #5 loop end [awaiting 14.04] wblock 0
[14.05611] #5 got lock [awaiting 14.04], go to sleep 3
[17.05663] done #5
