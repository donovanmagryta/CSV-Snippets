/ / g e t   h t t p   u r l   s e n t   d a t a 
 $ t a s k   =   u r l d e c o d e ( $ _ G E T [ " t a s k " ] ) ;   
  
 
 / / g e t   g e n e r i c   d a t a   f r o m   j s o n   a n d   e c h o   a s   j s o n 
   $ f i l e   =   f o p e n ( " p r o g r a m . j s o n " , " a + " )   o r   d i e   ( " f i l e   n o t   f o u n d " ) ;   
   $ j s o n   =   f i l e _ g e t _ c o n t e n t s ( ' p r o g r a m . j s o n ' ) ; 
   $ d a t a   =   j s o n _ d e c o d e ( $ j s o n ,   t r u e ) ;   
   $ i n f o   =   $ d a t a [ $ t a s k ] ; 
 $ r e p l y   =   j s o n _ e n c o d e ( $ i n f o ,   t r u e ) ; 
 e c h o   $ r e p l y ; 
 f c l o s e ( $ f i l e ) ; 
 
 //1
 / / w r i t e   s t a r t   t i m e r   t o   j s o n 
   $ f i l e   =   f o p e n ( " p r o g r a m . j s o n " , " a + " )   o r   d i e   ( " f i l e   n o t   f o u n d " ) ;   
   $ j s o n   =   f i l e _ g e t _ c o n t e n t s ( ' p r o g r a m . j s o n ' ) ; 
   $ d a t a   =   j s o n _ d e c o d e ( $ j s o n ,   t r u e ) ;   
 / /   s t a r t   t i m e r   f o r   t a s k : 
 $ d a t a [ $ t a s k ] [ ' l a s t t i m e ' ] = $ t i m e ( ) ;   
 $ n e w j s o n   =   j s o n _ e n c o d e ( $ d a t a ) ;   
 f i l e _ p u t _ c o n t e n t s ( ' p r o g r a m . j s o n ' ,   $ n e w j s o n ) ;   
 f c l o s e ( $ f i l e ) ; 
 

//2
 / / w r i t e   s t o p p e d   t i m e r   t o t a l   t o   t a s k   s u b   a r r a y 
   $ f i l e   =   f o p e n ( " p r o g r a m . j s o n " , " a + " )   o r   d i e   ( " f i l e   n o t   f o u n d " ) ;   
   $ j s o n   =   f i l e _ g e t _ c o n t e n t s ( ' p r o g r a m . j s o n ' ) ; 
   $ d a t a   =   j s o n _ d e c o d e ( $ j s o n ,   t r u e ) ;   
 / /   s t a r t   t i m e r   f o r   t a s k : 
 $ s t a r t t i m e   =   $ d a t a [ $ t a s k ] [ ' l a s t t i m e ' ] ; 
 $ s t o p t i m e   =   t i m e ( ) ;   
 $ m i n s   =   ( $ s t o p t i m e   -   $ s t a r t t i m e )   /   6 0 ;   
 $ i n f o   =   $ d a t a [ $ t a s k ] [ ' t i m i n g s ' ] ; 
 a r r a y _ p u s h ( $ i n f o , $ m i n s ) ; 
 $ n e w j s o n   =   j s o n _ e n c o d e ( $ d a t a ) ;   
 f i l e _ p u t _ c o n t e n t s ( ' p r o g r a m . j s o n ' ,   $ n e w j s o n ) ;   
 f c l o s e ( $ f i l e ) ; 
 
 / / g e t   a v e r a g e   f r o m   t a s k   t i m i n g   m i n s   a r r a y 
   $ f i l e   =   f o p e n ( " p r o g r a m . j s o n " , " a + " )   o r   d i e   ( " f i l e   n o t   f o u n d " ) ;   
   $ j s o n   =   f i l e _ g e t _ c o n t e n t s ( ' p r o g r a m . j s o n ' ) ; 
   $ d a t a   =   j s o n _ d e c o d e ( $ j s o n ,   t r u e ) ;   
   $ a r r a y   =   $ d a t a [ $ t a s k ] [ ' t i m i n g s ' ] ; 
 i f ( c o u n t ( $ a r r a y ) )   {   $ a r r a y   =   a r r a y _ f i l t e r ( $ a r r a y ) ;   
   $ a v e r a g e   =   a r r a y _ s u m ( $ a r r a y ) /        c o u n t ( $ a r r a y ) ; 
$timings = array();
 a r r a y _ p u s h ( $ timings , $average) ;  
e c h o   $ a v e r a g e ; 
//$timings to plug into knapsack
 f c l o s e ( $ f i l e ) ; 
 } 

//3
// V2 pull data from json formatted for knapsack including averaging 
   $ f i l e   =   f o p e n ( " p r o g r a m . j s o n " , " a + " )   o r   d i e   ( " f i l e   n o t   f o u n d " ) ;   
   $ j s o n   =   f i l e _ g e t _ c o n t e n t s ( ' p r o g r a m . j s o n ' ) ; 
   $ d a t a   =   j s o n _ d e c o d e ( $ j s o n ,   t r u e ) ;
$arrayLength = count($data); 
$i = 0; 
while ($i < $arrayLength) { 
 $ task  =   $ d a t a [ i]  ; 
$tasklist = array();
 a r r a y _ p u s h ( $ tasklist,$ task) ; 
 $ timing =   $ d a t a [ i ] [ ' timing' ] ; 
 i f ( c o u n t ( $ a r r a y ) )   {   $ a r r a y   =   a r r a y _ f i l t e r ( $ a r r a y ) ;   
   $ a v e r a g e   =   a r r a y _ s u m ( $ a r r a y ) /        c o u n t ( $ a r r a y ) ; 
$timinglist = array();
 a r r a y _ p u s h ( $ timingist, $average) ;  
}
$priority = $data[i]['value'];
$value = array();
array_push($value, $priority);
$i++;
}
fclose($file);


// V1 pull data from json formatted for knapsack
//   foreach ($data as $value) {
//if ($value == "value") {

 //4
 < ? P H P 
 # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # 
 #   0 - 1   K n a p s a c k   P r o b l e m   S o l v e   w i t h   m e m o i z a t i o n   o p t i m i z e   a n d   i n d e x   r e t u r n s 
 #   $ w   =   t i m e   e x p e n s e   o f   i t e m 
 #   $ v   =   p r i o r i t y   o f   i t e m 
 #   $ i   =   i n d e x 
 #   $ a W   =   A v a i l a b l e   t i m e 
 #   $ m   =   M e m o   i t e m s   a r r a y 
 #   P H P   T r a n s l a t i o n   f r o m   P y t h o n ,   M e m o i z a t i o n , 
 #   a n d   i n d e x   r e t u r n   f u n c t i o n a l i t y   a d d e d   b y   B r i a n   B e r n e k e r 
 # 
 # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # 
 
 f u n c t i o n   k n a p S o l v e F a s t 2 ( $ w ,   $ v ,   $ i ,   $ a W ,   & $ m )   { 
   
 	 g l o b a l   $ n u m c a l l s ; 
 	 $ n u m c a l l s   + + ; 
 	 / /   e c h o   " C a l l e d   w i t h   i = $ i ,   a W = $ a W < b r > " ; 
   
 	 / /   R e t u r n   m e m o   i f   w e   h a v e   o n e 
 	 i f   ( i s s e t ( $ m [ $ i ] [ $ a W ] ) )   { 
 	 	 r e t u r n   a r r a y (   $ m [ $ i ] [ $ a W ] ,   $ m [ ' p i c k e d ' ] [ $ i ] [ $ a W ]   ) ; 
 	 }   e l s e   { 
   
 	 	 / /   A t   e n d   o f   d e c i s i o n   b r a n c h 
 	 	 i f   ( $ i   = =   0 )   { 
 	 	 	 i f   ( $ w [ $ i ]   < =   $ a W )   {   / /   W i l l   t h i s   i t e m   f i t ? 
 	 	 	 	 $ m [ $ i ] [ $ a W ]   =   $ v [ $ i ] ;   / /   M e m o   t h i s   i t e m 
 	 	 	 	 $ m [ ' p i c k e d ' ] [ $ i ] [ $ a W ]   =   a r r a y ( $ i ) ;   / /   a n d   t h e   p i c k e d   i t e m 
 	 	 	 	 r e t u r n   a r r a y ( $ v [ $ i ] , a r r a y ( $ i ) ) ;   / /   R e t u r n   t h e   v a l u e   o f   t h i s   i t e m   a n d   a d d   i t   t o   t h e   p i c k e d   l i s t 
   
 	 	 	 }   e l s e   { 
 	 	 	 	 / /   W o n ' t   f i t 
 	 	 	 	 $ m [ $ i ] [ $ a W ]   =   0 ;   / /   M e m o   z e r o 
 	 	 	 	 $ m [ ' p i c k e d ' ] [ $ i ] [ $ a W ]   =   a r r a y ( ) ;   / /   a n d   a   b l a n k   a r r a y   e n t r y . . . 
 	 	 	 	 r e t u r n   a r r a y ( 0 , a r r a y ( ) ) ;   / /   R e t u r n   n o t h i n g 
 	 	 	 } 
 	 	 } 	 
   
 	 	 / /   N o t   a t   e n d   o f   d e c i s i o n   b r a n c h . . 
 	 	 / /   G e t   t h e   r e s u l t   o f   t h e   n e x t   b r a n c h   ( w i t h o u t   t h i s   o n e ) 
 	 	 l i s t   ( $ w i t h o u t _ i ,   $ w i t h o u t _ P I )   =   k n a p S o l v e F a s t 2 ( $ w ,   $ v ,   $ i - 1 ,   $ a W ,   $ m ) ; 
   
 	 	 i f   ( $ w [ $ i ]   >   $ a W )   {   / /   D o e s   i t   r e t u r n   t o o   m a n y ? 
   
 	 	 	 $ m [ $ i ] [ $ a W ]   =   $ w i t h o u t _ i ;   / /   M e m o   w i t h o u t   i n c l u d i n g   t h i s   o n e 
 	 	 	 $ m [ ' p i c k e d ' ] [ $ i ] [ $ a W ]   =   $ w i t h o u t _ P I ;   / /   a n d   a   b l a n k   a r r a y   e n t r y . . . 
 	 	 	 r e t u r n   a r r a y ( $ w i t h o u t _ i ,   $ w i t h o u t _ P I ) ;   / /   a n d   r e t u r n   i t 
   
 	 	 }   e l s e   { 
   
 	 	 	 / /   G e t   t h e   r e s u l t   o f   t h e   n e x t   b r a n c h   ( W I T H   t h i s   o n e   p i c k e d ,   s o   a v a i l a b l e   w e i g h t   i s   r e d u c e d ) 
 	 	 	 l i s t   ( $ w i t h _ i , $ w i t h _ P I )   =   k n a p S o l v e F a s t 2 ( $ w ,   $ v ,   ( $ i - 1 ) ,   ( $ a W   -   $ w [ $ i ] ) ,   $ m ) ; 
 	 	 	 $ w i t h _ i   + =   $ v [ $ i ] ;     / /   . . a n d   a d d   t h e   v a l u e   o f   t h i s   o n e . . 
   
 	 	 	 / /   G e t   t h e   g r e a t e r   o f   W I T H   o r   W I T H O U T 
 	 	 	 i f   ( $ w i t h _ i   >   $ w i t h o u t _ i )   { 
 	 	 	 	 $ r e s   =   $ w i t h _ i ; 
 	 	 	 	 $ p i c k e d   =   $ w i t h _ P I ; 
 	 	 	 	 a r r a y _ p u s h ( $ p i c k e d , $ i ) ; 
 	 	 	 }   e l s e   { 
 	 	 	 	 $ r e s   =   $ w i t h o u t _ i ; 
 	 	 	 	 $ p i c k e d   =   $ w i t h o u t _ P I ; 
 	 	 	 } 
   
 	 	 	 $ m [ $ i ] [ $ a W ]   =   $ r e s ;   / /   S t o r e   i t   i n   t h e   m e m o 
 	 	 	 $ m [ ' p i c k e d ' ] [ $ i ] [ $ a W ]   =   $ p i c k e d ;   / /   a n d   s t o r e   t h e   p i c k e d   i t e m 
 	 	 	 r e t u r n   a r r a y   ( $ r e s , $ p i c k e d ) ;   / /   a n d   t h e n   r e t u r n   i t 
 	 	 } 	 
 	 } 
 } 
   
   
 $ i t e m s 4   =   a r r a y ( " m a p " , " c o m p a s s " , " w a t e r " , " s a n d w i c h " , " g l u c o s e " , " t i n " , " b a n a n a " , " a p p l e " , " c h e e s e " , " b e e r " , " s u n t a n   c r e a m " , " c a m e r a " , " t - s h i r t " , " t r o u s e r s " , " u m b r e l l a " , " w a t e r p r o o f   t r o u s e r s " , " w a t e r p r o o f   o v e r c l o t h e s " , " n o t e - c a s e " , " s u n g l a s s e s " , " t o w e l " , " s o c k s " , " b o o k " ) ; 
 $ w 4   =   a r r a y ( 9 , 1 3 , 1 5 3 , 5 0 , 1 5 , 6 8 , 2 7 , 3 9 , 2 3 , 5 2 , 1 1 , 3 2 , 2 4 , 4 8 , 7 3 , 4 2 , 4 3 , 2 2 , 7 , 1 8 , 4 , 3 0 ) ; 
 $ v 4   =   a r r a y ( 1 5 0 , 3 5 , 2 0 0 , 1 6 0 , 6 0 , 4 5 , 6 0 , 4 0 , 3 0 , 1 0 , 7 0 , 3 0 , 1 5 , 1 0 , 4 0 , 7 0 , 7 5 , 8 0 , 2 0 , 1 2 , 5 0 , 1 0 ) ; 
   
 # #   I n i t i a l i z e 
 $ n u m c a l l s   =   0 ;   $ m   =   a r r a y ( ) ;   $ p i c k e d I t e m s   =   a r r a y ( ) ; 
   
 # #   S o l v e 
 l i s t   ( $ m 4 , $ p i c k e d I t e m s )   =   k n a p S o l v e F a s t 2 ( $ w 4 ,   $ v 4 ,   s i z e o f ( $ v 4 )   - 1 ,   4 0 0 ,   $ m ) ; 
   
 #   D i s p l a y   R e s u l t   
   f o r   ( $ i   =   0 ;   $ i   <   c o u n t ( $ p i c k e d I t e m s ) ;   $ i + + ) 
 { 
       $ d =   $ p i c k e d I t e m s [ $ i ] ; 
       $ b   =   $ i t e m s 4 [ $ d ] ; 
     E c h o   $ b ; 
 } 
   
 / / p r i n t _ r ( $ p i c k e d I t e m s ) ; 
 ? > 
 
 
 
