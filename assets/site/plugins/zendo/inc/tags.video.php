<?php

# Custom Kirbytags
return [

    # All the attributes
    'attr' => [
        'class',
        'caption',
        'height',
        'width'
    ],

    # Prepare the markup
    'html' => function ($tag) {

        # The iframe (probably)
        $video = Html::video(
            $tag->value,
            $tag->kirby()->option('kirbytext.video.options', [])
        );

        # Create a div and place the video inside it
        $wrapper = Html::tag('div' , [ $video ], [
            'class' => 'video-wrapper'
        ]);

        # If there's a width set, add the witdh as an inline style
        if ($tag->width)
            $tag->width = "max-width:{$tag->width}px";

        # Video container to create background color box effect like an image
        $container = Html::tag('div' , [$wrapper] , ['class' => 'video-container']);

        # Return a figure with the inner video
        return Html::figure([$container], $tag->caption, [
            'class'  => $tag->class  ?? $tag->kirby()->option('kirbytext.video.class', 'video-figure'),
            'height' => $tag->height ?? $tag->kirby()->option('kirbytext.video.height'),
            'width'  => $tag->width  ?? $tag->kirby()->option('kirbytext.video.width'),
            'style'  => $tag->width  ?? false
        ]);
    }
];