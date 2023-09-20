from django.db import models

class Comment(models.Model):
    author = models.CharField(max_length=100)
    comment_text = models.TextField()

    def __str__(self):
        return self.author

