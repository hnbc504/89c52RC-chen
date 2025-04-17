#include <STC89C5xRC.H>

void Delay(unsigned int xms)		//@11.0592MHz
{
	unsigned char i, j;
	while(xms)
	{

	i = 2;
	j = 199;
	do
	{
		while (--j);
	} while (--i);
	xms=xms-1;
	}
}

void main()
{
		if(P31==0)
		{
			Delay(20);
			while(P31==0)
			{
				Delay(20);
				P20=0;
				Delay(200);
				P20=1;
				P21=0;
				Delay(200);
				P21=1;
				Delay(20);
			}
		}
		if(P30==0)
		{
			Delay(20);
			while(P30==0)
			{
				Delay(20);
				P22=0;
				Delay(200);
				P22=1;
				P23=0;
				Delay(200);
				P23=1;
				Delay(20);
			}
		}
		if(P32==0)
		{
			Delay(20);
			while(P32==0)
			{
				Delay(20);
				P24=0;
				Delay(200);
				P24=1;
				P25=0;
				Delay(200);
				P25=1;
				Delay(20);
			}
		}
		if(P33==0)
		{
			Delay(20);
			while(P33==0)
			{
				Delay(20);
				P26=0;
				Delay(200);
				P26=1;
				P27=0;
				Delay(200);
				P27=1;
				Delay(20);
			}
		}
}