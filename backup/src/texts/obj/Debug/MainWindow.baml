   M S B A M L   `   `   `  ????	  texts    texts.MainWindow   5      \ XPresentationFramework, Version=4.0.0.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35R NWindowsBase, Version=4.0.0.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35W SPresentationCore, Version=4.0.0.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35D 9http://schemas.microsoft.com/winfx/2006/xaml/presentation    5   	   R NSystem.Xaml, Version=4.0.0.0, Culture=neutral, PublicKeyToken=b77a5c561934e089:x,http://schemas.microsoft.com/winfx/2006/xaml     5   	   -   5          ?Name$  mwidnow??5       ? Title$ 	CRR Texts??5   	   $	??410??5   	    ? 
ResizeMode$ CanResizeWithGrip=?5	   	   $??19q?5
   	   $	??900??5   	    ? Icon$ favicon.ico??5   	    ? WindowStartupLocation$ CenterScreen=?5   	   
??????  ? AllowsTransparency .  ? WindowStyle$
 None=?5   	    J? Effect 5      -  'System.Windows.Media.Effects.BlurEffect  5   
   -   5        BBGH??   Radius$ 1Q?5   #   	   
KernelType$		 Box=?6.   6A   
 ? 	Resources
 5         BBG ?? 
TargetName ?? TargetProperty9  3System.Windows.Media.Animation.EasingDoubleKeyFrame O? KeyTime O? Value   EasingFunction0  *System.Windows.Media.Animation.QuarticEase7  1System.Windows.Media.Animation.EasingFunctionBase   
EasingMode??%?   &	        ?? 5   
   .??5      U? $
 BBGH??6,   $ Radius?6I   .\?5        $ 00:00:00.0001??6'   $	 190Q?6?     5      $ 
00:00:00.4??6'   $ 0Q?6<    5        5      $ EaseIn=?6&   5      5      5       5!       ? Triggers 5"      :? 5#   
    :? RoutedEvent$ Window.Loaded??6   [?5$      ?? 5%      #???   6"   5'      .??5)   
   ??  ?? CornerRadius$ 9??6   $??1q?6"   
???   ?._?5*   
   ?  ? RowDefinitions 5+      ?? 5,      $
??auto ?5-      6%   ?? 5.      6"   ?? 5/      $
??auto ?50      6%   .+?52      ?? -   5        $??0,0,0,1q?53      
???   ?$ 9,9,0,0??58      
???????._?5:      ?  ? ColumnDefinitions 5;      ?? 5<      $
??auto ?6+   ?? 5=      6-   ?? 5>      $
??auto ?6/   .+?5@      ??  ?? Orientation$ 
Horizontal=?6!   $??9q?6:   $
??Left=?6E   .+?5A      ?? $??19??6M   ??6    ?? *Icon+ ?? ElementName$ mwidnow??6[   ?? 5B      $??Center=?6    $??Center=?6=   $??9??6X   $??9,0,0,0q?6e   ??6v   ?? *Title+$ mwidnow??6?   5D      ?? 5E      $??9q?6!   $??1??6,   $ 
Horizontal=?6<   5H      ?? 5I      $??9q?6!   $??2??6,   $ 
Horizontal=?6<   .+?5J      ?? .??6!   _6$   ?? 5K      .??6!   O6$   ?? 5L      .??6!   X6$   5M      5N      5O      ?? 5P      $??1??5Q      ???	#99ffffff._?5S      ? .+?5T      ?? $??Center=?5U      $??9q?5V      $??Center=?5W      .??64   Ali to dela5X   &   5Y      5Z      ?? 5[      $??0,1,0,0q?6   
???   ?$??2??6C   $??19??6P   
???????$ 0,0,9,9??6o   5]      5^      5_      5`      