<?php

namespace App\Controllers;

class Home extends BaseController
{
    protected $data = [];

    public function index()
    {
        $this->data['hero'] = [
            'text' => ['<h3>professional landing page</h3>', '<h1>We help you manage your website successfully!</h1>'],
            'form' => [
                'action' => '/subscribe',
                'input' => [form_input('email', '', ['class' => 'form-control', 'placeholder' => 'Enter your email'])],
                'button' => 'Subscribe',
            ],
        ];
        $this->data['features'] = [
            'title' => 'What you get',
            'tab' => [
                anchor('#tab01', 'Responsive', ['aria-controls' => '#tab01', 'data-toggle' => 'tab', 'role' => 'tab']),
                anchor('#tab02', 'Mobile', ['aria-controls' => '#tab02', 'data-toggle' => 'tab', 'role' => 'tab']),
                anchor('#tab03', 'Support', ['aria-controls' => '#tab03', 'data-toggle' => 'tab', 'role' => 'tab']),
            ],
            'items' => [
                [
                    [
                        '<h2>Minimal Design</h2>',
                        '<p>Nam feugiat a ante sollicitudin luctus. Quisque eget placerat massa. Ut quis ligula ornare, pellentesque velit eget, vestibulum est. Donec pretium tristique elit eget sodales. Pellentesque posuere.</p>'
                    ],
                    [
                        '<h2>Easy to use</h2>',
                        '<p>Nam feugiat a ante sollicitudin luctus. Quisque eget placerat massa. Ut quis ligula ornare, pellentesque velit eget, vestibulum est. Donec pretium tristique elit eget sodales. Pellentesque posuere.</p>'
                    ],
                ],
                [
                    [
                        '<h2>Compatible Browsers</h2>',
                        '<p>Nam feugiat a ante sollicitudin luctus. Quisque eget placerat massa. Ut quis ligula ornare, pellentesque velit eget, vestibulum est. Donec pretium tristique elit eget sodales. Pellentesque posuere.</p>'
                    ],
                    [
                        '<h2>User Friendly</h2>',
                        '<p>Nam feugiat a ante sollicitudin luctus. Quisque eget placerat massa. Ut quis ligula ornare, pellentesque velit eget, vestibulum est. Donec pretium tristique elit eget sodales. Pellentesque posuere.</p>'
                    ],
                    [
                        '<h2>HTML5 & CSS3</h2>',
                        '<p>Nam feugiat a ante sollicitudin luctus. Quisque eget placerat massa. Ut quis ligula ornare, pellentesque velit eget, vestibulum est. Donec pretium tristique elit eget sodales. Pellentesque posuere.</p>'
                    ],
                ],
                [
                    [
                        '<h2>Managed Stuffs</h2>',
                        '<p>Nam feugiat a ante sollicitudin luctus. Quisque eget placerat massa. Ut quis ligula ornare, pellentesque velit eget, vestibulum est. Donec pretium tristique elit eget sodales. Pellentesque posuere.</p>'
                    ],
                    [
                        '<h2>Easy to use</h2>',
                        '<p>Nam feugiat a ante sollicitudin luctus. Quisque eget placerat massa. Ut quis ligula ornare, pellentesque velit eget, vestibulum est. Donec pretium tristique elit eget sodales. Pellentesque posuere.</p>'
                    ],
                ],
            ],
            'image' => '/assets/images/feature-mockup.png',
        ];
        $this->data['about'] = [
            'title' => 'Professional Team for you',
            'teams' => [
                [
                    'image' => '/assets/images/team-image1.jpg',
                    'summary' => [
                        '<h2>Andrew Orange</h2>',
                        '<small>Art Director</small>',
                        '<p>Lorem ipsum dolor sit amet, consectetur adipisicing eiusmod tempor incididunt ut labore et dolore magna.</p>',
                    ],
                ],
                [
                    'image' => '/assets/images/team-image2.jpg',
                    'summary' => [
                        '<h2>Catherine Soft</h2>',
                        '<small>Senior Manager</small>',
                        '<p>Lorem ipsum dolor sit amet, consectetur adipisicing eiusmod tempor incididunt ut labore et dolore magna.</p>',
                    ],
                ],
                [
                    'image' => '/assets/images/team-image3.jpg',
                    'summary' => [
                        '<h2>Jack Wilson</h2>',
                        '<small>CEO / Founder</small>',
                        '<p>Lorem ipsum dolor sit amet, consectetur adipisicing eiusmod tempor incididunt ut labore et dolore magna.</p>',
                    ],
                ],
            ],
        ];

        $this->data['testimonial'] = [
            'title' => 'What People Say',
            'comments' => [
                [
                    'text' => 'Vestibulum tempor facilisis efficitur. Sed nec nisi sit amet nibh pellentesque elementum. In viverra ipsum ornare sapien rhoncus ullamcorper.',
                    'image' => '/assets/images/tst-image1.jpg',
                    'name' => 'Michael',
                ],
                [
                    'text' => 'Vestibulum tempor facilisis efficitur. Sed nec nisi sit amet nibh pellentesque elementum. In viverra ipsum ornare sapien rhoncus ullamcorper.',
                    'image' => '/assets/images/tst-image2.jpg',
                    'name' => 'Sofia',
                ],
                [
                    'text' => 'Vestibulum tempor facilisis efficitur. Sed nec nisi sit amet nibh pellentesque elementum. In viverra ipsum ornare sapien rhoncus ullamcorper.',
                    'image' => '/assets/images/tst-image3.jpg',
                    'name' => 'Monica',
                ],
            ],
        ];

        $this->data['pricing'] = [
            'title' => 'Choose any plan',
            'table' => [
                [
                    'label' => 'Student',
                    'features' => [
                        '20 Responsive Designs',
                        '10 Dashboards',
                        '1 TB Storage',
                        '6 TB Bandwidth',
                        '24-hour Support',
                    ],
                    'price' => '$200/mo',
                    'action' => anchor('#', 'Register Now', ['class' => 'section-btn pricing-btn'])
                ],
                [
                    'label' => 'Business',
                    'features' => [
                        '50 Responsive Designs',
                        '20 Dashboards',
                        '2 TB Storage',
                        '10 TB Bandwidth',
                        '24-hour Support',
                    ],
                    'price' => '$200/mo',
                    'action' => anchor('#', 'Register Now', ['class' => 'section-btn pricing-btn'])
                ],
                [
                    'label' => 'Professional',
                    'features' => [
                        '100 Responsive Designs',
                        '50 Dashboards',
                        '10 TB Storage',
                        '10 TB Bandwidth',
                        '24-hour Support',
                    ],
                    'price' => '$200/mo',
                    'action' => anchor('#', 'Register Now', ['class' => 'section-btn pricing-btn'])
                ],
            ],
        ];
        $this->data['message'] = session()->getFlashData('message');
        return view('index', $this->data);
    }

    public function simpletine_contact()
    {
        $name = $this->request->getPost('name');
        $email = $this->request->getPost('email');
        $message = $this->request->getPost('message');

        if (!empty($name) && !empty($email) && !empty($message)) {
            session()->setFlashdata('message', 'Submitted');

            return redirect()->to('/');
        }
    }
}
