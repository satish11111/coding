
class binarytree{
   class node{
	   int data;
	   node left;
	   node right;
   }
   node root;
   
   public binarytree(int arr[]) {
	   this.root=construct(arr,0,arr.length-1);
   }
   public node construct(int[] arr,int lo,int hi) {
	   if(lo>hi) {
		   return null;
	   }
	   //mid of arry
	   int mid=(lo+hi)/2;
	   
	   //creating 
	   node nn=new node();
	   nn.data=arr[mid];
	   
	   nn.left=construct(arr,lo,mid-1);
	   nn.right=construct(arr,mid+1,hi);
	   
	   return nn;
   }
   public void displayvalue() {
	   display(this.root);
   }
   public void display(node nn) {
	   if(nn==null) {
		   return;
	   }
	   String str=" ";
	   if(nn.left==null) {
		   str+='.';
	   }else {
		   str+=nn.left.data;
	   }
	   
	   str+="->"+nn.data+"->";
	   if(nn.right==null) {
		   str+='.';
	   }else {
		   str+=nn.right.data;
	   }
	   System.out.println(str);
	   display(nn.left);
	   display(nn.right);
	   
   }
}


public class bst {
	public static void main(String args[]) {
		int arr[]= {1,2,3,4,5,6,7,8};
		binarytree bs=new binarytree(arr);
		bs.displayvalue();
	}
	
     
}
