# lab-codeigniter-utility
Simple utility to use in the Codeigniter projects. I use it in my lab project. You can use it at your own risk.

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
