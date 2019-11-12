# lab-codeigniter-utility
Simple utility for use in codeigniter projects. I use this for my lab project. Feel free to change at your own risk.

# Installation
Save in application/libraries folder

# How to use
e.g:
```php
public function reset_csrf() 
{
    $this->load->library('utility');
    $this->utility->new_csrf();
}
```
