import javax.swing.*;
import java.awt.*;
import java.awt.event.*;

public class SettingsPage extends JFrame {

    public SettingsPage() {
        setTitle("Settings Page");
        setSize(400, 200);
        setDefaultCloseOperation(EXIT_ON_CLOSE);
        setLocationRelativeTo(null);

        JLabel label = new JLabel("This is the Settings Page", SwingConstants.CENTER);
        label.setFont(new Font("Arial", Font.BOLD, 20));
        label.setForeground(new Color(0, 102, 0)); // Green color

        JButton homeButton = new JButton("Home");
        homeButton.addActionListener(e -> {
            dispose();
            new Homepage().setVisible(true);
        });

        JPanel centerPanel = new JPanel(new BorderLayout());
        centerPanel.setBorder(BorderFactory.createEmptyBorder(30, 10, 10, 10));
        centerPanel.add(label, BorderLayout.CENTER);

        add(centerPanel, BorderLayout.CENTER);
        add(homeButton, BorderLayout.SOUTH);
    }

    public static void main(String[] args) {
        new SettingsPage().setVisible(true);
    }
}
