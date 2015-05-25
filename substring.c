#include<stdio.h>
#include<stdlib.h>
#include<string.h>
int findSubString(char * str , char *subString)
{

int i=0,j=0;

while(*(str+i)!='\0')
{
//check for string if exists in both
while((*(str+i+j) == *(subString+j))&& (*(subString+j)!='\0'))
{
j++;
}
if( j == length(subString))
{
return (i);
}
 j=0;i++;
}
return -1;
}

int length(char *str)
{
int i=0;
while(*(str+i)!='\0')
{
i++;
}
return i;
}

int main()
{
int i=5;
char *str = (char *)malloc(10*sizeof(char));
char *substr = (char *)malloc(10*sizeof(char));
//printf("enter the string ::\n");
scanf("%s",str);
//printf("enter the sub  string ::\n");
scanf("%s",substr);
printf("%s",substr);
printf("sub string at %d location",findSubString(str,substr));
return 0;

}
